<?php

require_once dirname(__FILE__) . '/../Abstract.php';

class Diff_Renderer_Html_Array extends Diff_Renderer_Abstract
{
    /**
     * @var array Array of the default options that apply to this renderer.
     */
    protected $defaultOptions = array(
        'tabSize' => 4
    );

    /**
     * Render and return an array structure suitable for generating HTML
     * based differences. Generally called by subclasses that generate a
     * HTML based diff and return an array of the changes to show in the diff.
     *
     * @return array An array of the generated chances, suitable for presentation in HTML.
     */
    public function render()
    {
        // As we'll be modifying a & b to include our change markers,
        // we need to get the contents and store them here. That way
        // we're not going to destroy the original data
        $a = $this->diff->getA();
        $b = $this->diff->getB();

        $changes = array();
        $opCodes = $this->diff->getGroupedOpcodes();
        foreach ($opCodes as $group) {
            $blocks = array();
            $lastTag = null;
            $lastBlock = 0;
            foreach ($group as $code) {
                list($tag, $i1, $i2, $j1, $j2) = $code;

                if ($tag == 'replace' && $i2 - $i1 == $j2 - $j1) {
                    for ($i = 0; $i < ($i2 - $i1); ++$i) {
                        $fromLine = $a[$i1 + $i];
                        $toLine = $b[$j1 + $i];

                        list($start, $end) = $this->getChangeExtent($fromLine, $toLine);
                        if ($start != 0 || $end != 0) {
                            $last = $end + strlen($fromLine);
                            $fromLine = substr_replace($fromLine, "\0", $start, 0);
                            $fromLine = substr_replace($fromLine, "\1", $last + 1, 0);
                            $last = $end + strlen($toLine);
                            $toLine = substr_replace($toLine, "\0", $start, 0);
                            $toLine = substr_replace($toLine, "\1", $last + 1, 0);
                            $a[$i1 + $i] = $fromLine;
                            $b[$j1 + $i] = $toLine;
                        }
                    }
                }


                if ($tag == 'equal') {
                    $lines = array_slice($a, $i1, ($i2 - $i1));
                    $blocks[$lastBlock]['base']['lines'] += $this->formatLines($lines);
                    $lines = array_slice($b, $j1, ($j2 - $j1));
                    $blocks[$lastBlock]['changed']['lines'] += $this->formatLines($lines);
                } else {
                    if ($tag == 'replace' || $tag == 'delete') {
                        $lines = array_slice($a, $i1, ($i2 - $i1));
                        $lines = $this->formatLines($lines);
                        $lines = str_replace(array("\0", "\1"), array('<del>', '</del>'), $lines);
                        $blocks[$lastBlock]['base']['lines'] += $lines;
                    }

                    if ($tag == 'replace' || $tag == 'insert') {
                        $lines = array_slice($b, $j1, ($j2 - $j1));
                        $lines = $this->formatLines($lines);
                        $lines = str_replace(array("\0", "\1"), array('<ins>', '</ins>'), $lines);
                        $blocks[$lastBlock]['changed']['lines'] += $lines;
                    }
                }
                if ($tag != $lastTag) {
                    $blocks[] = array(
                        'tag' => $tag,
                        'base' => array(
                            'offset' => $i1,
                            'lines' => array()
                        ),
                        'changed' => array(
                            'offset' => $j1,
                            'lines' => array()
                        )
                    );
                    $lastBlock = count($blocks) - 1;
                }

                $lastTag = $tag;
            }
            $changes[] = $blocks;
        }
        return $changes;
    }

    /**
     * Given two strings, determine where the changes in the two strings
     * begin, and where the changes in the two strings end.
     *
     * @param string $fromLine The first string.
     * @param string $toLine The second string.
     * @return array Array containing the starting position (0 by default) and the ending position (-1 by default)
     */
    private function getChangeExtent($fromLine, $toLine)
    {
        $start = 0;
        $limit = min(strlen($fromLine), strlen($toLine));
        while ($start < $limit && $fromLine{$start} == $toLine{$start}) {
            ++$start;
        }
        $end = -1;
        $limit = $limit - $start;
        while (-$end <= $limit && substr($fromLine, $end, 1) == substr($toLine, $end, 1)) {
            --$end;
        }
        return array(
            $start,
            $end + 1
        );
    }

    /**
     * Format a series of lines suitable for output in a HTML rendered diff.
     * This involves replacing tab characters with spaces, making the HTML safe
     * for output, ensuring that double spaces are replaced with &nbsp; etc.
     *
     * @param array $lines Array of lines to format.
     * @return array Array of the formatted lines.
     */
    protected function formatLines($lines)
    {
        $lines = array_map(array($this, 'ExpandTabs'), $lines);
        $lines = array_map(array($this, 'HtmlSafe'), $lines);
        foreach ($lines as &$line) {
            $line = preg_replace_callback('# ( +)|^ #', array($this, 'fixSpaces'), $line);
        }
        return $lines;
    }

    /**
     * Replace a string containing spaces with a HTML representation using &nbsp;.
     *
     * @param string[] $matches Array with preg matches.
     * @return string The HTML representation of the string.
     */
    private function fixSpaces(array $matches)
    {
        $spaces = $matches[1];
        $count = strlen($spaces);
        if ($count == 0) {
            return '';
        }

        $div = floor($count / 2);
        $mod = $count % 2;
        return str_repeat('&nbsp; ', $div) . str_repeat('&nbsp;', $mod);
    }

    /**
     * Replace tabs in a single line with a number of spaces as defined by the tabSize option.
     *
     * @param string $line The containing tabs to convert.
     * @return string The line with the tabs converted to spaces.
     */
    private function expandTabs($line)
    {
        return str_replace("\t", str_repeat(' ', $this->options['tabSize']), $line);
    }

    /**
     * Make a string containing HTML safe for output on a page.
     *
     * @param string $string The string.
     * @return string The string with the HTML characters replaced by entities.
     */
    private function htmlSafe($string)
    {
        return htmlspecialchars($string, ENT_NOQUOTES, 'UTF-8');
    }
}
