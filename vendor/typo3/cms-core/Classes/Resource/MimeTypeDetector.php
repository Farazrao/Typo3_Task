<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Core\Resource;

/**
 * This class contains a list of all available / known mimetypes and file extensions,
 * and is automatically generated by TYPO3 via Core/Build/Scripts/generateMimeTypes.php
 */
final class MimeTypeDetector
{
    /**
     * @var MimeTypeCollection
     */
    private $collection;

    public function __construct()
    {
        $this->collection = new MimeTypeCollection();
    }

    /**
     * @return array<int, string>
     */
    public function getMimeTypesForFileExtension(string $fileExtension): array
    {
        $mimeTypes = [];
        $fileExtension = strtolower($fileExtension);
        foreach ($this->collection->getMap() as $mimeType => $availableExtensions) {
            if (in_array($fileExtension, $availableExtensions, true)) {
                $mimeTypes[] = $mimeType;
            }
        }
        return $mimeTypes;
    }

    /**
     * @return array<int, string>
     */
    public function getFileExtensionsForMimeType(string $mimeType): array
    {
        return $this->collection->getMap()[strtolower($mimeType)] ?? [];
    }
}
