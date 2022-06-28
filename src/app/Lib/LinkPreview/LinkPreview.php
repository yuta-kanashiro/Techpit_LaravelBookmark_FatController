<?php
namespace App\Lib\LinkPreview;

use Dusterio\LinkPreview\Client;

final class LinkPreview
{
    public function get(string $url): GetLinkPreviewResponse // : arrayや: GetLinkPreviewResponseの意味は？
    {
        $previewClient = new Client($url);// CreateBookmarkUseCaseからここに移動
        $response = $previewClient->getPreview('general')->toArray();

        return new GetLinkPreviewResponse($response['title'], $response['description'], $response['cover']);
    }
}