# Custom Greeting Plugin

This is a custom WordPress plugin that introduces a new shortcode to display personalized greeting messages to logged-in users and a generic greeting to users who are not logged in.

## Installation

1. Download the plugin zip file from the releases section of this repository.
2. Log in to your WordPress admin panel.
3. Navigate to Plugins > Add New.
4. Click on the "Upload Plugin" button and select the zip file you downloaded.
5. Click on the "Install Now" button.
6. After installation, click on the "Activate" button to activate the plugin.

## Usage

The plugin provides a shortcode `[greeting_message]` that can be used in posts or pages to display personalized greeting messages.

- If the user is logged in, the message will include the user's display name and change depending on the time of day (Morning, Afternoon, Evening).
- If the user is not logged in, the shortcode will display a generic greeting.

## Shortcode Examples

- `[greeting_message]`: Displays personalized greeting message based on the time of day for logged-in users or a generic greeting for guests.

## Security

The plugin is designed to be secure and safe from common vulnerabilities such as SQL injection and XSS. However, it's always recommended to keep your WordPress installation and plugins up-to-date to mitigate potential security risks.
