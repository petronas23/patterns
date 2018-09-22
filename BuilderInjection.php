<?php
class FoundationBuilder{
    public function build(){
        return 'Foundation';
    }
}

class WallBuilder{
    public function build(){
        return 'Wall';
    }
}

class RoofBuilder{
    public function build(){
        return 'Roof';
    }
}


class Builder {
    private $components = null;

    public function __construct()
    {
        $this->components['foundation'] = new FoundationBuilder();
        $this->components['wall'] = new WallBuilder();
        $this->components['roof'] = new RoofBuilder();
    }

    public function build()
    {
        $buildComponents = [];

        foreach ($this->components as $component) {
            $buildComponents[] = $component->build();
        }

        return $buildComponents;
    }
}


$home = new Builder();
print_r($home->build());

