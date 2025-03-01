<?php

declare(strict_types=1);

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tests\Mapping\Fixture\Yaml;

use Doctrine\Common\Collections\Collection;

class MaterializedPathCategory
{
    private $id;

    private $title;

    private $path;

    private $level;

    private $children;

    private $parent;

    private $lockTime;

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Add children
     */
    public function addChildren(Category $children): void
    {
        $this->children[] = $children;
    }

    /**
     * @return Collection $children
     */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param Category $parent
     */
    public function setParent($parent): void
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Category $parent
     */
    public function getParent(): Category
    {
        return $this->parent;
    }

    public function setLevel($level): void
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setPath($path): void
    {
        $this->path = $path;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setLockTime($lockTime): void
    {
        $this->lockTime = $lockTime;
    }

    public function getLockTime()
    {
        return $this->lockTime;
    }
}
