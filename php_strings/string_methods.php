<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>String Methods</title>
</head>

<body>
    <div>
        <a href="/">Back to homepage</a>
        <h1>String Methods in PHP</h1>
        <? $long_string = "Lorem Ipsump Gymps lorem Ispy gypms Lorem";
        echo "\t\t\t<b>$long_string</b>\n" ?>
        <ol>
            <li><b>strlen()</b> - String Length : <? echo strlen($long_string); ?></li>
            <li><b>str_word_count()</b> - String Word Count : <? echo str_word_count($long_string); ?></li>
            <li><b>strpos()</b> - Word position on String Length : <? echo strpos($long_string, "Ipsump"); ?></li>
            <li><b>stripos()</b> - Word Position on i<sup>th</sup> : <? echo stripos($long_string, "Gymps"); ?></li>
            <li><b>strrev()</b> - Reverse String : <? echo strrev($long_string); ?></li>
            <li><b>strtoupper()</b> - String To Upper Case : <? echo strtoupper($long_string); ?></li>
            <li><b>strtolowerr()</b> - String To Lower Case : <? echo strtolower($long_string); ?></li>
            <li><b>substr()</b> - Print Sub String from nth Position in Positive : <? echo substr($long_string, "5"); ?>
            </li>
            <li><b>substr()</b> - Print Sub String from nth Position in Negative : <? echo substr($long_string, "-5"); ?>
            </li>
            <li><b>substr_compare()</b> - *return 0 means true, 1 means false* Compare Two Strings :
                <? echo substr_compare($long_string, "Gymps", -5); ?></li>
            <li><b>substr_count()</b> - Count Substring : <? echo substr_count($long_string, "ps"); ?></li>
            <li><b>substr_replace()</b> - Replace Sub String : <? echo substr_replace($long_string, 'gymps', 0); ?></li>
            <li><b>str_replace()</b> - Replace String with given String :
                <? echo str_replace('Lorem', 'Lore', $long_string) ?></li>
            <li><b>ucfirst()</b> - Upper Case First : <? echo ucfirst(strtolower($long_string)); ?></li>
            <li><b>lcfirst()</b> - Lower Case First : <? echo lcfirst(strtoupper($long_string)); ?></li>
            <li><b>ucwords()</b> - Upper Case Words : <? echo ucwords(strtolower($long_string)); ?></li>
            <li><b>addcslashes()</b> - Add slash to a string character : <? echo addcslashes($long_string, 'G'); ?></li>
            <li><b>addslashes()</b> - Add slash inside string : <? echo addslashes("lorem 'ismp' sdfa"); ?></li>
            <li><b>bin2hex()</b> - Binary to hex conversion for string <? echo bin2hex($long_string); ?></li>
            <li><b>pack()</b> - Convert hex back to string : <? echo pack('H*', bin2hex($long_string)); ?></li>
            <li><b>chop()</b> - Delete word from string : <? echo chop($long_string, "Gymps"); ?></li>
            <li><b>chr()</b> - Convert binary Or octal Or Hex to string character :
                <? echo 'Binary 52 - ' . chr(52);
                echo ", Octal 052 - " . chr(052);
                echo ' , Hex 0x51 - ' . chr(0x51); ?>
            </li>
            <li><b>chunk_split()</b> - Split string in chunks : <?php echo chunk_split($long_string, 2, ','); ?></li>
            <li><b>convert_uuencode()</b> - Encode a string : <?php echo convert_uuencode($long_string); ?></li>
            <li><b>convert_uudecode()</b> - Decode a string :
                <?php echo convert_uudecode(convert_uuencode($long_string)); ?>
            </li>
            <li><b>using bin2hex() for converting into hex them encoding to ascii then again decoding and decoding using
                    pack()</b> :
                <? $ccstring = convert_uuencode(bin2hex($long_string));
                echo pack('H*', convert_uudecode($ccstring)) ?>
            </li>
            <?= $long_string?>
            <li><b>count_chars()</b> - Count character in a string : <?= print_r(count_chars($long_string,3)); ?></li>
            <li><b>explode()</b> - Split string in a array : <? print_r(explode(' ', $long_string)); ?></li>
            <li><b>implode()</b> - Joint array into a string : <? print_r(implode(' ', explode(' ', $long_string))); ?></li>
            <li><b>trim()</b> - Trim whitespacing : <? echo trim("   dasfadsf   "); ?></li>
            <li><b>trim()</b> - Trim trailing character from left to right : <? echo trim($long_string, "Lops"); ?></li>
            <li><b>ltrim()</b> - Left whitespacing trim : <? echo ltrim("   dafadsf"); ?></li>
            <li><b>ltrim()</b> - Left character trim : <? echo ltrim($long_string, "Lor"); ?></li>
            <li><b>rtrim()</b> - Right whitespacing trim : <? echo ltrim("dafadsf    "); ?></li>
            <li><b>rtrim()</b> - Right character trim : <? echo rtrim($long_string, "Gymps"); ?></li>
            <li><b>str_pad()</b> - String padding : <? echo str_pad($long_string, 50, 'Hi', STR_PAD_BOTH); ?></li>
            <li><b>htmlentities()</b> - Show entities in string :
                <? $htmlstmt = "<h1>Hello, World</h1>";
                print nl2br(htmlentities("This line is 'HTML' LINE $htmlstmt")); ?></li>
            <li><b>html_entity_decode()</b> - Decode html entities to string :
                <? echo html_entity_decode(htmlentities($htmlstmt)); ?></li>
        </ol>
    </div>
</body>

</html>