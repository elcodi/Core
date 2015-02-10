<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Core\Generator;

use Elcodi\Component\Core\Generator\Interfaces\GeneratorInterface;

/**
 * Class Sha1Generator
 *
 * This class is a sha1 string generator.
 */
class Sha1Generator implements GeneratorInterface
{
    /**
     * @var GeneratorInterface
     *
     * Generator
     */
    protected $generator;

    /**
     * Construct
     *
     * @param GeneratorInterface $generator Generator
     */
    public function __construct(GeneratorInterface $generator)
    {
        $this->generator = $generator;
    }

    /**
     * Generates a random string
     *
     * @param string $length Length of generation
     *
     * @return string Result of generation
     */
    public function generate($length = null)
    {
        return hash("sha1", $this->generator->generate($length));
    }
}
