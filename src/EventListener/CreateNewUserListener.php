<?php

namespace Bcs\MossRegistration\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\MemberModel;
use Contao\Module;
use Exception;

#[AsHook('createNewUser')]
class CreateNewUserListener
{
    /**
     * @throws Exception
     */
    public function __invoke(int $userId, array $userData, Module $module): void
    {

        echo "HIT";
      die();
        // Create avatar
        //$objMember = MemberModel::findById($userId);
        //Member::processAvatar($objMember, $userData);
    }
}
