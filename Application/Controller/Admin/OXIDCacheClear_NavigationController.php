<?php

namespace fthielen\OXIDCacheClear\Application\Controller\Admin;

use OxidEsales\Eshop\Core\Registry;

class OXIDCacheClear_NavigationController extends OXIDCacheClear_NavigationController_parent
{
    /**
     * Executes the tmp-clear method, and outputs a success-message
     */
    public function OXIDCacheClear_btn()
    {
        $excluded_files = ['.htaccess', '.htpasswd'];
        $tmp_dir = Registry::getConfig()->getConfigParam('sCompileDir');

        $this->_OXIDCacheClear_tmpClear($tmp_dir, $excluded_files);

        echo Registry::getLang()->translateString("OXIDCacheClear_success", 0, 1);
        exit;
    }

    /**
     * This private functions scans the tmp_dir for files and deletes them
     * If they are not in the excluded_files array
     * @param $tmp_dir
     * @param array $excluded_files
     */
    private function _OXIDCacheClear_tmpClear($tmp_dir, array $excluded_files)
    {
        foreach (scandir($tmp_dir) as $file) {
            if (is_dir($tmp_dir . "/" . $file) && $file != "." && $file != "..") {
                $this->_OXIDCacheClear_tmpClear($tmp_dir . "/" . $file, $excluded_files);
            }

            if (!is_dir($tmp_dir . "/" . $file) && $file != "." && $file != ".." && !in_array($file, $excluded_files)) {
                unlink($tmp_dir . "/" . $file);
            }
        }
    }
}