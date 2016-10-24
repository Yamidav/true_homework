<?php

const STORAGE_FILENAME = 'data.txt';

function redirect($url){
        header('Location: ' . $url);
        exit;
}

function prepareDataForStorage(array $data)
{
    if (empty($data)) {
        return null;
    }

    return serialize($data);
}

/**
 * Saved incomming data into file.
 *
 * @param string $data Data to save.
 *
 * @return boolean
 */
function saveToFile($data)
{
    $handle = fopen(STORAGE_FILENAME, 'a');
    $result = fwrite($handle, $data . PHP_EOL);
    fclose($handle);
    return !empty($result);
}

/**
 *
 * Checking is file for data exists
 *
 * @return bool
 */
function isStorageExists()
{
    return file_exists(STORAGE_FILENAME)
    && is_readable(STORAGE_FILENAME)
    && !empty(STORAGE_FILENAME);
}


/**
 *
 * Return array from string data
 *
 * @return array
 */
function getComments()
{
    if (!isStorageExists()) {
        return [];
    }

    $comments = file(STORAGE_FILENAME);
    return array_map('unserialize', $comments);
}

/**
 * Prepares comment body for safe storing.
 *
 * @param string $body Body contents.
 *
 * @return string
 */
function processCommentBody($body)
{
    $body = htmlspecialchars($body);
    $body = nl2br($body);
    return str_replace(["\r", "\n"], '', $body);
}