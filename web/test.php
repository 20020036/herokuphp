<!--

Fixes:
Category: Accessibility
1. Document doesn't have a <title> element. (Fixed)
2. <html> elements does not have a [lang] attribute. (Fixed)

Category: Best Practices
1. Does not use HTTPS (Not Fixed)
2. Page lacks the HTML doctype, thus triggering quirks-mode. (Fixed)

Category: SEO
1. Does not have a <meta name="viewport"> tag with width or initial-scale. (Fixed)
2. Document doesn't use legible font sizes. (Fixed)
3. Document does not have a meta description. (Fixed)

-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Author: Elizabeth Abraham">
  <title>Test Page</title>
</head>
<body style="font-size: 15px;">
  Hello World!
</body>
</html>