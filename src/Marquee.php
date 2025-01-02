<?php

namespace Sharat0\PhpMarque;

class Marquee
{
    public static function render($rows = [])
    {
        $html = '<div class="container mt-5">';

        foreach ($rows as $index => $row) {
            // Determine if the row should use reverse direction
            $reverseClass = isset($row['reverse']) && $row['reverse'] ? ' reverse' : '';

            $html .= '<div class="marquee-container">';
            $html .= '<div class="marquee-content' . $reverseClass . '">';

            foreach ($row['content'] as $item) {
                $html .= '<div class="review-card">';
                $html .= '<img src="' . htmlspecialchars($item['avatar']) . '" alt="' . htmlspecialchars($item['name']) . '">';
                $html .= '<div>';
                $html .= '<strong>' . htmlspecialchars($item['name']) . '</strong>';
                $html .= '<p>@' . htmlspecialchars($item['username']) . '</p>';
                $html .= '<blockquote>' . htmlspecialchars($item['review']) . '</blockquote>';
                $html .= '</div></div>';
            }

            $html .= '</div></div>';
        }

        $html .= '<div class="gradient-left"></div>';
        $html .= '<div class="gradient-right"></div>';
        $html .= '</div>';

        return $html;
    }
}
