<?php

class  Software {
	public $trackName; 	     // アプリ名
	public $version; 	     // バージョン
	public $price; 		     // 値段
	public $genre; 		     // カテゴリ 配列形式の一番最初を受け取る
	public $fileSize; 	     // 容量(MB)
	public $sellerName;      // 販売者名
	public $trackViewUrl; 	 // アプリリンク
	public $phgTrackViewUrl; // phg
	public $artworkUrl;      // アートワーク：100x100-75 を拡張子前に指定
}

$affiliate_token = htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8');
$term = htmlspecialchars(urlencode($_GET['term']), ENT_QUOTES, 'UTF-8');
$entity = htmlspecialchars($_GET['entity'], ENT_QUOTES, 'UTF-8');
$array = array(); // 配列初期化

if (isset($term) && isset($entity)) {
	$url = "https://itunes.apple.com/search?term=$term&entity=$entity&country=JP&limit=25";
	$content = file_get_contents($url);
	$json = json_decode($content);
	$results = $json->{'results'};
	for ($i = 0; $i < count($results); $i++) {
		$result = $results[$i];
		$software = new Software();
		$software->trackName = $result->{'trackName'};
		$software->version = $result->{'version'};
		$software->price = $result->{'formattedPrice'};
		$software->genre = $result->{'genres'}[0];
		$software->fileSize = number_format(($result->{'fileSizeBytes'} + 0) / 1000000, 1);
		$software->sellerName = $result->{'sellerName'};
		$software->trackViewUrl = $result->{'trackViewUrl'};
		$software->phgTrackViewUrl = $result->{'trackViewUrl'} . "&at=$affiliate_token";
		$pattern = '|(.*?).([^.]+)$|';
		$replacement = '$1.100x100-75.$2';
		// macSoftware を検索した場合に、.512x512-75 が邪魔なので除去する
		$subject = str_replace(".512x512-75", "", $result->{'artworkUrl512'});
		$software->artworkUrl = preg_replace($pattern, $replacement, $subject);
		$array[] = $software;
	}
}

$output = null;
for ($i = 0; $i < count($array); $i++) {

	$software = new Software();
	$software = $array[$i];

	// ここから: 投稿に使用するテンプレート
	$temp = "<div class=\"application_box\"><a href=\"$software->phgTrackViewUrl\" target=\"itunes_store\"><img src=\"$software->artworkUrl\"></a><a href=\"$software->phgTrackViewUrl\" target=\"itunes_store\"><strong>$software->trackName</strong></a><br>カテゴリ: $software->genre<br />現在の価格: $software->price<br clear=\"both\" /></div>";
	// ここまで: 投稿に使用するテンプレート

	$encode = rawurlencode($temp);
	$temp = "<div class=\"search_content\">" . $temp . "<input type=\"button\" class=\"button\" value=\"投稿に挿入\" onClick=\"send_to_parent_editor('$encode');\"></div>";

	$output .= $temp;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="app-store-insert-style.css" type="text/css" />
<script type="text/javascript">
function send_to_parent_editor(str) {
	var win = parent.window.dialogArguments || opener || parent || top;
	win.send_to_editor(decodeURIComponent(str));
}
</script>
</head>
<body>

<div id="search_header_box">
	<a href="app-store-insert-iframe.php">検索条件をすべてリセットする</a> | <?php echo "全" . count($array) . "件" ?> | アフィリエイト・トークン: <?php echo $affiliate_token; ?>
</div>

<div id="search_box">
	<form method="get" action="">
		<div class="radio">
			<input type="radio" name="entity" value="software" <?php echo ($entity === "software" || strlen($entity) == 0) ?  "checked" : "" ; ?>>iPhone
			<input type="radio" name="entity" value="iPadSoftware" <?php echo ($entity === "iPadSoftware") ?  "checked" : "" ; ?>>iPad
			<input type="radio" name="entity" value="macSoftware" <?php echo ($entity === "macSoftware") ?  "checked" : "" ; ?>>Mac
		</div>
		<input type="text" name="term" value="<?php echo urldecode($term) ?>" class="search_box_text" />
		<input type="hidden" name="token" value="<?php echo urldecode($affiliate_token) ?>" />
		<input type="submit" value="検索する" class="button" />
	</form>
</div>

<?php echo $output; ?>

</body>
</html>