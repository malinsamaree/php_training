<?php
class ThreeColumnLayout implements Layout{
    private string $description;
    
    public function setDescription(string $description):void {
        $this->description = $description;
    }

    public function getDescription(): string {
        return $this->description;
    }
}