hp
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="createFolderRequest.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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
 * Request model for createFolder" operation.
 */
class CreateFolderRequest
{
    /**
     * Initializes a new instance of the CreateFolderRequest class.
     *  
     * @param string $path Folder path to create e.g. 'folder_1/folder_2/'
     * @param string $storage_name Storage name
     */
    public function __construct($path, $storage_name = null)             
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
    }

    /**
     * Folder path to create e.g. 'folder_1/folder_2/'
     */
    public $path;
	
    /**
     * Storage name
     */
    public $storage_name;
}
?>
<?p