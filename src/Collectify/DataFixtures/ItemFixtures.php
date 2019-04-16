<?php

class ItemFixtures extends BaseFixtures
{
    public function getType()
    {
        return ItemRepository::TYPE;
    }

    public function getFixtures()
    {
        return array(
            array(
                'title' => 'the name of Jesus is so good',
                'author' => 'Marina Kamnang',
                'editor' => null,
                'releasedAt' => '2018',
                'gender' => 'Slow gospel',
                'support' => 'CD',
                'category_id' => '1'
            ),
            array(
                'title' => 'How much I love Jesus-Christ',
                'author' => 'Herman Kutat',
                'editor' => 'Marina Kamnang',
                'releasedAt' => '10 Janvier 2019',
                'gender' => 'Slow gospel',
                'support' => 'Mp3',
                'category_id' => '1',
            ),
             array(
                 'title' => 'Radio Bemba',
                 'author' => 'Manu Chao',
                 'editor' => 'Virgin Records',
                 'releasedAt' => '2002',
                 'gender' => 'Rock',
                 'support' => 'Mp3',
                 'category_id' => '1',
             ),
            array(
                'title' => 'Back in Black',
                'author' => 'AC/DC',
                'editor' => 'ATCO',
                'releasedAt' => '1980',
                'gender' => 'Heavy Metal',
                'support' => 'Cassette Audio',
                'category_id' => '1',
            ),
            array(
                'title' => 'La classe americaine, le grand detournement',
                'author' => 'Les Nuls',
                'editor' => 'Canal+ Cinema',
                'releasedAt' => '1610',
                'gender' => 'Humour',
                'support' => 'Cassette Video',
                'category_id' => '2',
            ),
        );
    }

}
