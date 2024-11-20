# Mdot Text List Fade WordPress Plugin

Text List Fade is a WordPress plugin that allows you to create a shortcode to display a list of fading text on your website.

## Description

This plugin provides a simple shortcode that allows you to create a list of fading text, where each word fades in, remains visible for a specified duration, and then fades out before the next word appears. You can customize the list of words and the duration for which each word remains visible.

## Installation

1. Upload the `text-list-fade` folder to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage

Use the `[text_list_fade]` shortcode in your posts or pages to display a list of fading text. Customize the shortcode attributes as follows:

- `words`: List of words to display, separated by commas.
- `duration`: Duration in milliseconds for which each word remains visible (default is 5000 milliseconds or 5 seconds).

## Example usage:
`[text_list_fade words="Hello,World,WordPress" duration="5000"]`

