<?php
/**
 * CollectionRequestException.
 */

namespace Bmatovu\MtnMomo\Exceptions;

/**
 * Custom collection request exception.
 */
class CollectionRequestException extends \RunTimeException
{
    /**
     * Constructor.
     *
     * @param string $message
     * @param int $code
     * @param \GuzzleHttp\Exception\TransferException $guzzle_exception
     */
    public function __construct($message, $code = 0, $guzzle_exception = null)
    {
        parent::__construct($message, $code, $guzzle_exception);
    }
}
