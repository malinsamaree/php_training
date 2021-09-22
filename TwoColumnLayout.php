<?php
class TwoColumnLayout implements Layout{
    private ?string $title = null;
    private ?string $descriptionBefore = null;
    private ?string $descriptionAfter = null;
    private array $left = [];
    private array $right = [];

    public function setTitle(string $title): void{
        $this->title = $title;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getDescriptionBefore()
    {
        return $this->descriptionBefore;
    }

    public function setDescriptionBefore($descriptionBefore)
    {
        $this->descriptionBefore = $descriptionBefore;
    }

    public function getDescriptionAfter()
    {
        return $this->descriptionAfter;
    }

    public function setDescriptionAfter($descriptionAfter)
    {
        $this->descriptionAfter = $descriptionAfter;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft($left)
    {
        $this->left = $left;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function setRight($right)
    {
        $this->right = $right;
    }
}