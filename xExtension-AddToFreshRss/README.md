# FreshRSS - Add to FreshRSS extension

This FreshRSS extension provides a bookmarklet and subscription URL to quickly subscribe to RSS/Atom feeds from any web page.

## Installation

Upload the `xExtension-AddToFreshRss` directory to the FreshRSS `./extensions` directory on your server, then enable it on the extension panel in FreshRSS.

## Usage

After enabling the extension, open its configuration page. You will find:

### Bookmarklet

Drag the **Add to FreshRSS** button to your browser's bookmarks bar. When you visit a web page that has an RSS or Atom feed, click the bookmarklet to subscribe to it in FreshRSS.

### Subscription URL

Use the displayed URL pattern in external applications or as a browser feed reader handler. Replace `{FEED_URL}` with the actual feed URL you want to subscribe to.

For example, you can register FreshRSS as a custom RSS reader in Firefox:

1. Copy the subscription URL shown on the configuration page (without `{FEED_URL}`).
2. In Firefox, navigate to `about:config` and search for `browser.contentHandlers.types`.
3. Add a new handler using the copied URL appended with `%s` instead of `{FEED_URL}`.

## Features

- One-click bookmarklet for subscribing to feeds while browsing
- Custom subscription URL for browser and app integrations
