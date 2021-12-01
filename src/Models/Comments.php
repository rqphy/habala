<?php
class Comments {

    public int $id;
    public string $author;
    public DateTime $publishDateTime;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function setPublishDateTime(DateTime $publishDateTime): void
    {
        $this->publishDateTime = $publishDateTime;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPublishDateTime(): DateTime
    {
        return $this->publishDateTime;
    }
}