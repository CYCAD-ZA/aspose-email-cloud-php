<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="convertMapiMessageModelToFileRequest.php">
 *   Copyright (c) 2018-2020 Aspose.Email for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Email\Model\Requests;

/**
 * Request model for convertMapiMessageModelToFile" operation.
 */
class ConvertMapiMessageModelToFileRequest
{
    /**
     * Initializes a new instance of the ConvertMapiMessageModelToFileRequest class.
     *  
     * @param string $destination_format File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef
     * @param \Aspose\Email\Model\MapiMessageDto $mapi_message MAPI message model to convert
     */
    public function __construct($destination_format, $mapi_message)             
    {
        $this->destination_format = $destination_format;
        $this->mapi_message = $mapi_message;
    }

    /**
     * File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef
     */
    public $destination_format;
	
    /**
     * MAPI message model to convert
     */
    public $mapi_message;
}
?>
