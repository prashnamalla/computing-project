<?php

use Faker\Factory as Faker;
use App\Models\Property;
use App\Repositories\PropertyRepository;

trait MakePropertyTrait
{
    /**
     * Create fake instance of Property and save it in database
     *
     * @param array $propertyFields
     * @return Property
     */
    public function makeProperty($propertyFields = [])
    {
        /** @var PropertyRepository $propertyRepo */
        $propertyRepo = App::make(PropertyRepository::class);
        $theme = $this->fakePropertyData($propertyFields);
        return $propertyRepo->create($theme);
    }

    /**
     * Get fake instance of Property
     *
     * @param array $propertyFields
     * @return Property
     */
    public function fakeProperty($propertyFields = [])
    {
        return new Property($this->fakePropertyData($propertyFields));
    }

    /**
     * Get fake data of Property
     *
     * @param array $postFields
     * @return array
     */
    public function fakePropertyData($propertyFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'name' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $propertyFields);
    }
}
