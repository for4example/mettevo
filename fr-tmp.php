<?php 
/* 
* Template Name: Front
*/
get_header();
?>

<section>
    <table>
        <thead>
            <tr>
                <th>asd</th>
                <th>asd</th>
                <th>asd</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>asd</td>
                <td>asd</td>
                <td>asd</td>

            </tr>
        </tbody>
    </table>
</section>
<?php
$apiKey = "c10bac2d5ae85a4f7306676db8e8b240cf199af6";
$url = "https://api4.seranking.com/key-volume/1998331/";
$context = stream_context_create([
"http" => [
"method" => "GET",
"ignore_errors" => true,
"header" => [
"Authorization: Token $apiKey",
"Content-Type: application/json; charset=utf-8"
]]
]);
$httpStatus = null;
$result = file_get_contents($url, 0, $context);

if (isset($http_response_header)) {
preg_match("`HTTP/[0-9\.]+\s+([0-9]+)`", $http_response_header[0], $matches);
$httpStatus = $matches[1];
}
if (!$result) {
echo "Ошибка выполнения запроса!";
} else {
$result = json_decode($result);
var_dump($result);
}
?>

<?php get_footer();?>