# Http Proxy Integration for XenForo 2

When serving external images produced by your forum's members, some may track data like IP addresses, or otherwise lack SSL encryption and thereby prompt browsers to render your website insecure. This add-on connects with a http image or media proxy like [camo](https://github.com/atmos/camo) to aleviate these issues. Support is provided for over a dozen different hashing algorithms (See [hash_hmac_algos](https://www.php.net/manual/en/function.hash-hmac-algos.php)) with the option to hash using the original or URL-encoded url alongside making your own pattern.

Unlike XenForo's built-in image and link proxy, using an external service prevents your forum's host IP from being exposed. Caching should be configured on the proxy's end.

After installation, configure it by heading to the `HTTP Proxy` option group. Options are provided to:
* Enable/Disable Proxying
* Enable/Disable URL Encoding for Hashing
* Customize the Proxy Server URL (With URL and Token Placeholders)
* Select from Over a Dozen Hashing Algorithms
* Set the Instance Secret

Enabling this add-on will change the image source for external images to the provided http media proxy, modifying it in typical posts and in BbCode editor previews.

If the original URL is required (such as for debugging proxy errors), it is maintained in the `data-url` attribute.
