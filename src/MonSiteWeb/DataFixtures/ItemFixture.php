<?php

namespace MonSiteWeb\DataFixtures;

class ItemFixtures
{
    public function getTypes()
    {
        return "item";
    }

    public function getFixtures()
    {
        return array(
            array(
                'title'=>'The Chronic',
                'author'=>'Dr Dre',
                'editor'=>null,
                'releasedAt'=>'1996',
                'gender'=>'RAP',
                'support'=>'CD',
            ),
            array()
        );
    }

}