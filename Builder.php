<?php
class Builder {
    public function buildFoundation()
    {
        return 'Foundation';
    }

    public function buildWalls(){
        return 'Walls';
    }

    public function buildRoof(){
        return 'Roof';
    }

    public function build()
    {
        return [
            $this->buildFoundation(),
            $this->buildWalls(),
            $this->buildRoof()
        ];
    }
}


$home = new Builder();
print_r($home->build());

