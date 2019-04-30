<?php

namespace Drupal\book_author\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Author entities.
 *
 * @ingroup book_author
 */
interface AuthorInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Author name.
   *
   * @return string
   *   Name of the Author.
   */
  public function getName();

  /**
   * Sets the Author name.
   *
   * @param string $name
   *   The Author name.
   *
   * @return \Drupal\book_author\Entity\AuthorInterface
   *   The called Author entity.
   */
  public function setName($name);

  /**
   * Gets the Author creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Author.
   */
  public function getCreatedTime();

  /**
   * Sets the Author creation timestamp.
   *
   * @param int $timestamp
   *   The Author creation timestamp.
   *
   * @return \Drupal\book_author\Entity\AuthorInterface
   *   The called Author entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Author published status indicator.
   *
   * Unpublished Author are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Author is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Author.
   *
   * @param bool $published
   *   TRUE to set this Author to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\book_author\Entity\AuthorInterface
   *   The called Author entity.
   */
  public function setPublished($published);

}
