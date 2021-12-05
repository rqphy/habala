<?php

namespace App\Entity;

class Post extends Entity
{
	private $id;
	private $title;
	private $content;
	private $imageUrl;
	private $authorId;
	private $date;

	public function __construct(array $data)
	{
		$this->setTitle($data['title']);
		$this->setTitle($data['content']);
		$this->setTitle($data['imageUrl']);
		$this->setTitle($data['authorId']);
		$this->setTitle($data['date']);
	}

	// SETTERS
	public function setTitle(string $title)
	{
		$this->title = htmlspecialchars($title);
	}

	public function setContent(string $content)
	{
		$this->content = htmlspecialchars($content);
	}

	public function setImageUrl(string $imageUrl)
	{
		$this->imageUrl = htmlspecialchars($imageUrl);
	}

	public function setAuthorId(string $authorId)
	{
		$this->$authorId = htmlspecialchars($authorId);
	}

	public function setDate(string $date)
	{
		$this->$date = htmlspecialchars($date);
	}

	// GETTERS
	public function getPost()
	{
		$post['title'] = $this->title;
		$post['content'] = $this->content;
		$post['imageUrl'] = $this->imageUrl;
		$post['authorId'] = $this->authorId;
		$post['date'] = $this->date;

		return $post;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getImageUrl()
	{
		return $this->imageUrl;
	}

	public function getAuthorId()
	{
		return $this->authorId;
	}

	public function getDate()
	{
		return $this->date;
	}
}