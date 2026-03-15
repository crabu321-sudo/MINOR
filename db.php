<?php
$host     = "gondola.proxy.rlwy.net";
$port     = 17474;
$dbname   = "railway";
$username = "root";
$password = "BZeRStGCqkiBcoRaNjnBgNDwEmsbPuqR";

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$conn) {
    die(json_encode(['error' => 'Connection failed: ' . mysqli_connect_error()]));
}
?>
```

---

> ⚠️ I'm using your actual credentials here since Render doesn't have access to Railway's environment variables. Make sure this file is in your **private repo** and not publicly visible.

---

## ✅ Steps:
1. Update `db.php` with the code above
2. Push to GitHub
3. Render will auto-deploy
4. Test by going to:
```
https://minor-865y.onrender.com/save_score.php
