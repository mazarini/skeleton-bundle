<?php

/**
 * This file is part of mazarini/skeleton-bundle.
 *
 * mazarini/skeleton-bundle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * mazarini/skeleton-bundle is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
 * for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with mazarini/skeleton-bundle. If not, see <https://www.gnu.org/licenses/>.
 *
 * @package Mazarini/SkeletonBundle
 */

namespace App\Controller;

use App\Kernel;
use Mazarini\SkeletonBundle\Dummy;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Kernel $kernel): Response
    {
        $template = sprintf('home/%s.html.twig', 'index');
        $container =$kernel->getContainer();

        $names[] = 'Mazarini\SkeletonBundle\Dummy';
        $names[] = 'mazarini_skeleton_dummy';

        $services = [];
        foreach ($names as $name) {
            $services[$name] = $container->get($name);
        }

        return $this->render($template, [
            'kernel' => $kernel,
            'container' => $container,
            'services' => $services,
        ]);
    }
}
