<?php
    /**
     * Created by PhpStorm.
     * Test work chaialovsyi sergii
     * Class make copy of images from remote url
     * @User: mountin
     * Date: 16.04.16
     * Time: 14:08
     * @host is host internet
     * @folder - folder to download images
     * @formats - allowed formats of extensions @array[]
     * @return number of images downloaded
     */

    namespace app\Codework\AppWork;

    use app\Codework\Exceptions\BaseException;

    class AppWork
    {
        public $formats;
        public $host;
        public $folder;

        function __construct($host = 0, $formats = 0, $folder = "")
        {
            $this->formats = $formats;
            $this->host = $host;
            $this->folder = $folder;
        }

        /**
         * function make copy of images
         * @return number of images downloaded or throw exceptions
         */
        function makeCopy()
        {
            static $counter = 0;
            try {
                $fp = fopen($this->host, "r");

                if (!$fp) {
                    throw new BaseException("Could not open the host name! BASE");
                } else {
                    fclose($fp);
                }
            } catch (BaseException $e) {
                echo "Could not open the host name!  " . $e->getMessage();
            } catch (Exception $e) {
                echo "cant do some issues: " . $e->getMessage();
            }

            $html = file_get_contents($this->host);

            $doc = new \DOMDocument();
            @$doc->loadHTML($html);
            $imageTags = $doc->getElementsByTagName('img');


            try {
                foreach ($imageTags as $tag) {
                    $file1 = pathinfo($tag->getAttribute('src'));
                    var_dump($file1);
                    if (empty($file1['extension'])) {
                        throw new fileModuleException("Not image  File exist!");
                        continue;
                    }

                    if (in_array($file1['extension'], $this->formats)) {
                        if (!copy(
                            $file1['dirname'] . DIRECTORY_SEPARATOR . $file1['basename'],
                            $this->folder . DIRECTORY_SEPARATOR . $file1['basename']
                        )
                        ) {
                            throw new fileNotFoundException("Could not open the host file!");
                        } else {
                            $counter++;
                        }
                    } else {
                        throw new fileModuleException('Not allowed format', 0);
                    }
                }
            } catch (fileNotFoundException $e) {
                echo 'Выброшено fileNotFoundException: ', $e->getMessage(), "\n";
            } catch (fileModuleException $e) {
                echo 'Выброшено fileModuleException: ', $e->getMessage(), "\n";
            } catch (Exception $e) {
                echo 'Выброшено исключение: ', $e->getMessage(), "\n";
            }

            echo 'Has been copied ' . $counter . ' files';

            return $counter;
        }
    }