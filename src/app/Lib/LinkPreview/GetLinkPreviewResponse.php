<?php
namespace App\Lib\LinkPreview;

final class GetLinkPreviewResponse
{
    // 下の3行で何が変わる？確かめたい
    public string $title;
    public string $description;
    public string $cover;

    public function __construct(string $title, string $description, string $cover)
    {
        $this->title = $title;
        $this->description = $description;
        $this->cover = $cover;
    }
}
