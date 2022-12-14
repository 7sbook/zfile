<?php require TEMPLATE . '/inc/_global/config.php'; ?>
<?php require TEMPLATE . '/inc/_global/views/head_start.php'; ?>
<?php require TEMPLATE . '/inc/_global/views/head_end.php'; ?>
<?php require TEMPLATE . '/inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row no-gutters justify-content-center bg-body-dark">
    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
        <!-- Sign Up Block -->
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12.jpg');">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 bg-white">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <!-- Header -->
                        <div class="mb-2 text-center">
                            <a class="link-fx text-success font-w700 font-size-h1" href="index.php">
                                <span class="text-dark">裂变</span><span class="text-success">时代</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signup" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-alt" id="signup-username" name="username" placeholder="用户名">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-alt" id="email" name="email" placeholder="仅允许使用QQ邮箱，网易邮箱，谷歌邮箱注册" required>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="inputEmailcode" name="code" class="form-control" placeholder="验证码" required>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success col-sm-12" id="sendemail_btn" data-event="register" >发送验证码</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-alt" id=password name="password" placeholder="请输入密码">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-alt" id="password1" name="password1" placeholder="请再次输入密码">
                            </div>
                            <div class="form-group">
                                <a href="#" data-toggle="modal" data-target="#modal-terms">条款与条件</a>
                                <a class="float-right" href="/index.php?a=login">已有账号？去登录</a> 
                                <div class="custom-control custom-checkbox custom-control-primary">
                                    <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                    <label class="custom-control-label" for="signup-terms">我同意</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-success">
                                    <i class="fa fa-fw fa-plus mr-1"></i> 立即注册
                                </button>
                            </div>
                        </form>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
                <div class="col-md-6 order-md-0 bg-xeco-op d-flex align-items-center">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="media">
                            <a class="img-link mr-3" href="javascript:void(0)">
                                <?php $dm->get_avatar(0, 'female', 64, true); ?>
                            </a>
                            <div class="media-body">
                                <p class="text-white font-w600 mb-1">
                                    再使用裂变网盘后，用户体验得到明显的提升！
                                </p>
                                <a class="text-white-75 font-w600" href="javascript:void(0)">商业大数据公司, CEO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Sign Up Block -->
    </div>
</div>
<!-- END Page Content -->

<?php require TEMPLATE . '/inc/_global/views/page_end.php'; ?>

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">隐私协议和注册说明</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                <div id="intro" class="space-bottom-1">
    <!-- Title -->
    <div class="border-bottom pb-5 mb-5">
        <h1 class="text-primary"><span class="font-weight-semi-bold">裂变网盘</span> 服务条款</h1>
        <p>在您在每次使用我们提供的服务前，先阅读本服务条款，条款内容可能会更改。</p>
    </div>
    <!-- End Title -->

    <!-- Title -->
    <div class="mb-3">
        <h2 class="h5">欢迎使用裂变网盘</h2>
    </div>
    <!-- End Title -->

    <p>
        【特别提示】尊敬的用户，欢迎你注册并使用上海金灏网络科技有限公司（下称“裂变网盘”或“本网站”）为你提供的服务。在此特别提醒：如你欲访问或使用本网站提供的服务（包括通过其他合作网站的帐号直接登录本网站），必须事先认真阅读本服务协议，<strong>特别是与你的权益有重大关系、涉及免除或限制裂变网盘责任的条款。</strong>限制、免责条款可能以加粗或加下划线形式提示你注意。
    </p>
    <p>如你对本协议的内容有任何疑问，可与<a
            href="mailto:admin@eenot.com">admin@eenot.com</a>&nbsp;联系，我们专业的客服人员将竭诚为您服务。用户不得以未阅读本服务协议内容或者未获得裂变网盘对你问询的解答等理由作任何形式的抗辩。
    </p>
    <p><strong>未成年人应在法定监护人陪同下审阅和履行，未成年人行使和履行本协议项下的权利和义务视为已获得了法定监护人的认可。</strong></p>
</div>

<div id="basics" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">1. 基本条款</h3>
    </div>
    <!-- End Title -->

    <p>1.1
        请认真阅读本协议，<strong>你浏览、访问或使用本网站提供的任何设施或服务或通过本网站上使用任何服务，即表明你同意本协议条款（“协议”），</strong>本协议仅在你和裂变网盘之间成立。使用本网站服务或任何购买行为，均需遵守本协议规定的全部条款。<strong>裂变网盘保留随时修改这些协议条款的权利，任何修改均会及时在本网站公示。如果你继续使用本网站的服务，即表示接受已经修订的协议条款。</strong>
    </p>
    <p>1.2
        裂变网盘仅提供相关的网络服务，除此之外与相关网络服务有关的设备（如电脑、手机、调制解调器及其他与接入互联网或移动网有关的装置）及所需的费用（如为接入互联网而支付的电话费及上网费，为使用移动网而支付的手机费）均应由用户自行负担。
    </p>
    <p>1.3 用户一经注册帐号，除非相关服务要求单独开通权限，用户有权利用该帐号使用本网站其他服务，当用户使用本网站其他服务时，用户的使用行为视为其对该服务的服务条款以及该服务中发出的各类公告的同意。</p>
</div>

<div id="contents" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">2. 服务内容（以下简称“本服务”）</h3>
    </div>
    <!-- End Title -->

    <p>2.1 裂变网盘是云存储技术服务提供者，仅向用户提供信息云存储空间服务。</p>
    <p>2.2 裂变网盘通过云存储技术为用户提供个人数据存储和管理等在线服务，本身不直接向用户提供信息，对用户传输内容不做任何修改或编排。</p>
    <p>2.3
        裂变网盘对用户存储在本网站的内容不做任何主动的审查，工作人员也无法查看用户存储的任何内容，但是对于用户通过本网站提供的服务制作、上传、发布、传播的内容，裂变网盘有权根据国家相关法律法规和本协议其他准则，进行必要的监督和审查。
    </p>
    <p><strong>2.4
            裂变网盘无法控制利用本服务制作、上传、存储、传播之内容，也无法对用户的使用行为进行全面监视与控制，因此裂变网盘不保证内容的合法性、正确性、完整性、真实性或品质；你已预知使用本服务时，可能会接触到令人不快、不适当或令人厌恶之内容，并同意将自行加以判断并承担所有风险，而不依赖于裂变网盘。</strong>
    </p>
    <p><strong>2.5 裂变网盘在提供网络服务时，可能会对部分网络服务（
            例如网络存储及其他电信增值服务）的用户收取一定的费用。在此情况下，裂变网盘会在相关页面上做明确的提示。如用户不同意支付该等费用，则裂变网盘有权不向该用户提供相应的增值服务。用户理解并知晓，在为裂变网盘提供的增值服务进行付费的过程中，可能出现第三方支付系统。</strong>
    </p>

</div>

<div id="accounts" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">3. 帐号使用须知</h3>
    </div>
    <!-- End Title -->


    <!-- Title -->
    <div class="mb-3">
        <h4 class="h6">3.1 帐号使用权</h4>
    </div>
    <!-- End Title -->

    <p>3.1.1
        用户可以通过在本网站注册或通过其他合作网站的帐号使用裂变网盘提供的各项服务，通过其他合作网站的帐号使用裂变网盘提供的各项服务，需根据提示填写资料并接受本服务协议的约束。同时用户需理解裂变网盘也会为其他互联网企业定制专业化的用户服务体系，即用户通过裂变网盘获得的服务内容有可能来源于第三方企业，一旦用户接受该第三方企业提供的网络服务内容，则用户应当遵守该第三方企业对其服务做出的约定。如第三方企业接入裂变网盘系统且其既有用户可以使用裂变网盘提供的服务，则该既有用户即成为裂变网盘的用户，其帐号也自动成为裂变网盘帐号。该既有用户同意亦将与在裂变网盘系统中直接注册的用户一样遵守本协议的约定。但对于这些既有用户，裂变网盘在服务过程中可能会提供其已经熟悉的网站界面，该过程仅为方便用户接受服务而设，既有用户与裂变网盘之间的关系仍应受本协议的约定。
    </p>
    <p>3.1.2
        用户应提供完整、真实、准确和最新的个人信息资料用于注册帐号，不得以虚假、冒用的居民身份信息等进行注册。如因注册信息不真实而引起的问题由用户本人承担，裂变网盘不承担任何责任，并有权在无需事先通知用户的情况下暂停或终止为该类用户提供服务。
    </p>
    <p>3.1.3 用户注册成功或通过其他合作网站的帐号使用裂变网盘服务的，裂变网盘将给予用户一个唯一标识的帐号，帐号的所有权归裂变网盘，在无明显相反证据的情形下，帐号的使用权归实名认证人享有。</p>
    <p>3.1.4
        用户帐号和密码遭到他人非法使用或发生其他任何安全问题，用户应该立即通知裂变网盘。裂变网盘在收到用户要求采取措施暂停其帐号登录和使用的通知后，有权要求用户提供有效身份信息。裂变网盘核实用户所提供的个人有效身份信息与实名认证、注册的身份信息相一致的，应当及时采取措施暂停用户帐号的登录和使用。用户没有提供其个人有效身份证件或者用户提供的个人有效身份证件与实名认证、注册的身份信息不一致的，裂变网盘有权拒绝用户的前述请求并保留对该帐号采取暂停或终止服务的权利。
    </p>
    <p>3.1.5 裂变网盘有权根据相关政府部门的要求，对用户的个人身份信息予以披露。</p>


    <!-- Title -->
    <div class="mb-3">
        <h4 class="h6">3.2 帐号使用限制、暂停或终止</h4>
    </div>
    <!-- End Title -->

    <p>3.2.1 裂变网盘帐号仅限个人非商业性使用。裂变网盘禁止帐号共享、赠与、借用、租用、转让或售卖（除双方在官方的监督下签订转让协议的情况外），因上述原因导致帐号或密码丢失，裂变网盘有权不予找回。</p>
    <p>3.2.2 用户不得以盗打、窃取、利用系统漏洞等非法途径或通过未获裂变网盘授权的销售渠道获取、购买VIP会员服务。</p>
    <p>3.2.3 用户不得篡改本网站或攻击本网站，不得对裂变网盘帐号进行非正常使用（例如盗链、盗下等）或以任何方式超出裂变网盘预定目的使用本服务，干扰本网站正常秩序、干扰其他用户正常使用本服务。</p>
    <p>3.2.4 用户不得使用代理IP地址、企图掩盖其使用多个注册帐号，或以任何方式干扰本网站或服务；用户不得出于破坏某个群体或干扰其他用户的目的而使用多点登录。</p>
    <p>3.2.5 为了充分利用裂变网盘帐号资源，如果你存在注册裂变网盘帐号后未及时进行初次登录使用，或长期未登录使用裂变网盘帐号等情形，裂变网盘有权终止该裂变网盘帐号的使用。</p>

    <ul class="text-secondary">
        <li class="pb-2">注册后连续30天未登录，裂变网盘帐号可能被回收；</li>
        <li class="pb-2">连续300天未登录，裂变网盘帐号可能被回收，账号内的会员服务将被自动终止；</li>
        <li class="pb-2">若长期未登录账号（免费用户为60天，付费会员为300天），我们将视为您放弃账号内的所有文件。</li>
    </ul>

    <p>3.2.6 裂变网盘帐号可存储的最大文件数为十万个，最大文件夹数为五千个，每日最大上传数为一千个，若超过，裂变网盘有权暂停或终止用户上传文件的权限，并有权删除文件直至文件总数不超过最大规定数量。</p>
    <p>3.2.7 若无特别规定，裂变网盘帐号内存储的文件单个大小限制为4GB。若超过，裂变网盘有权暂停或终止用户上传文件的权限，并有权删除大于限制大小的文件。</p>
    <p>3.2.8 为确保公平使用网络环境，对于过量使用资源的用户，裂变网盘有权暂时限制、中断为其提供服务，待资源使用率下降时，恢复正常。</p>
    <p>3.2.9
        <strong>若用户违反本协议约定的，裂变网盘有权依据本协议或相关法律法规，基于裂变网盘的独立判断，在无需事先通知用户的情况下采取包括但不限于警告、暂停或终止使用、取消VIP会员服务资格、回收/关闭帐号等措施，一旦终止使用，用户在本网站中储存的任何信息可能无法恢复，裂变网盘无需对用户或任何第三方承担责任，且由此带来的损失由用户自行承担。</strong>
    </p>

    <p>3.3 当用户每次上网或使用其他服务完毕后，请关闭有关帐号，例如裂变网盘帐号等安全退出。<strong>因黑客行为或用户的过错导致帐号、密码或被他人非法使用，裂变网盘不承担任何责任。</strong></p>

</div>

<div id="commitment" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">4. 用户承诺</h3>
    </div>
    <!-- End Title -->

    <p>4.1 用户使用本网站或本服务必须遵守国家法律法规的规定，并不得侵犯他人合法权益。</p>
    <p>4.2 用户承诺不使用或允许任何其他人使用裂变网盘提供的服务从事如下活动（包括但不限于）：</p>
    <ul class="text-secondary">
        <li class="pb-2">未经允许，进入计算机信息网络或者使用计算机信息网络资源的；</li>
        <li class="pb-2">未经允许，对计算机信息网络功能进行删除、修改或者增加的；</li>
        <li class="pb-2">未经允许，对进入计算机信息网络中存储、处理或者传输的数据和应用程序进行删除、修改或者增加的；</li>
        <li class="pb-2">故意制作、传播计算机病毒等破坏性程序的；</li>
        <li class="pb-2">企图规避裂变网盘的安全设置或网络系统的；</li>
        <li class="pb-2">任何形式的网络监控，截取或试图截取通过电信系统传送的任何信息的；</li>
        <li class="pb-2">构成或诱发可能被视为违法、违规、违反、违反公序良俗或以其他方式违法违规或侵犯任何第三方权益的；</li>
        <li class="pb-2">以导致裂变网盘的计算机系统或设施承受不合理负载的方式获取裂变网盘提供的服务或网站信息，或任何可能对互联网或移动网正常运转造成不利影响的行为；</li>
        <li class="pb-2">限制或妨害任何其他客户正常使用本网站和接受本网站服务的；</li>
        <li class="pb-2">其他危害计算机信息网络安全或不符合普遍认可的有关互联网及其他网络通常做法的行为。</li>
    </ul>

    <p>4.3
        用户利用本网站或本服务制作、上传、发布、复制、传送或通过其他方式传播的<strong>包括但不限于资讯、资料、文字、软件、音乐、音讯、照片、图形、视讯、信息、用户的登记资料或其他资料（以下简称"内容"），</strong>不得含有任何违法、违规、违反公序良俗的信息，包括但不限于以下信息：
    </p>
    <ul class="text-secondary">
        <li class="pb-2">违反宪法确定的基本原则的；</li>
        <li class="pb-2">危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</li>
        <li class="pb-2">损害国家荣誉和利益的；</li>
        <li class="pb-2">煽动民族仇恨、民族歧视，破坏民族团结的；</li>
        <li class="pb-2">破坏国家宗教政策，宣扬邪教和封建迷信的；</li>
        <li class="pb-2">散布谣言，扰乱社会秩序，破坏社会稳定的；</li>
        <li class="pb-2">散布淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的；</li>
        <li class="pb-2">侮辱或者诽谤他人，侵害他人合法权益的；</li>
        <li class="pb-2">煽动非法集会、结社、游行、示威、聚众扰乱社会秩序的；</li>
        <li class="pb-2">以非法民间组织名义活动的；</li>
        <li class="pb-2">含有法律、行政法规禁止的其他内容的。</li>
    </ul>

    <p>4.4 用户同意并接受裂变网盘通过电子邮件或其他方式向用户发送商品促销或其他商业信息。裂变网盘有权在提供网络服务的过程中以各种方式投放各种商业性广告或其他任何类型的商业信息。</p>
    <p>4.5
        用户使用本服务所传播或发送的内容具有合法来源且符合国家法律法规的规定，相关内容为用户所有或已经获得相关权利人的授权。用户不得为任何非法目的或超出裂变网盘预定目的使用本服务，不得以任何形式使用本服务侵害裂变网盘的商业利益或商誉，包括但并不限于发布非经裂变网盘许可的商业广告，例如转售、未经他人同意发送电子邮件信息，任何类型的传销材料（无论接收人是否愿意接收此类邮件），未经授权使用或伪造电子邮件题头信息。
    </p>
    <p>4.6
        用户使用本网站或本服务必须遵守所有适用于服务的地方法律、国家法律和国际法律。用户对其帐号发生的或通过其帐号发生的一切活动和事件（包括但不限于用户发表的任何内容以及由此产生的任何后果）独立承担全部的法律责任。
    </p>
    <p>4.7
        用户承担法律责任的形式包括但不限于：对受到侵害者进行赔偿，以及在裂变网盘首先承担了因用户行为导致的行政处罚或侵权损害赔偿责任后，用户应给予裂变网盘等额的赔偿。用户理解，如果裂变网盘发现用户利用本网站传输的信息明显属于上述所列内容之一，本网站将立即停止传输，保存有关记录，向国家有关机关报告，并且删除含有该内容的地址、目录或关闭服务器。
    </p>
    <p>4.8
        用户使用本网站电子公告服务，包括电子布告牌、电子白板、电子论坛、网络聊天室和留言板等以交互形式为上网用户提供信息发布条件的行为，也须遵守本条的规定以及本网站将专门发布的电子公告服务规则，上段中描述的法律后果和法律责任同样适用于电子公告服务的用户。若用户的行为不符合以上提到的服务条款，裂变网盘将作出独立判断无需事先通知用户的情况下立即取消用户服务帐号，并无须承担任何责任。
    </p>
    <p>4.9
        如果你在使用本服务过程中违反前述承诺，你理解并同意，裂变网盘有权采取相应制止你违法行为的措施（包括但不限于暂停提供服务、向国家政府部门报告等），或将与你有关的身份信息、联系方式等必要信息提供相关争议方或相关部门。
    </p>


</div>


<div id="allrights" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">5. 所有权</h3>
    </div>
    <!-- End Title -->

    <p>5.1 裂变网盘保留对以下各项内容、信息完全的、不可分割的所有权及知识产权：</p>
    <ul class="text-secondary">
        <li class="pb-2">
            除用户自行上载、传播的内容外，本网站或本服务所有元素，包括但不限于所有内容、数据、技术、软件（包括小应用程序和脚本）、代码、用户界面、照片、录像、音乐、声音以及与其相关的任何衍生作品；</li>
        <li class="pb-2">用户信息；</li>
        <li class="pb-2">用户向裂变网盘提供的与本网站或本服务相关的任何信息及反馈。</li>
    </ul>

    <p>5.2 用户在使用本服务过程中所提供的作品的所有权及其知识产权归用户或其权利人所有。</p>
    <p>5.3 裂变网盘在提供服务过程中，所使用到的公司名称、产品名称、动漫形象、等商业标识，其著作权或商标权归裂变网盘公司所有。</p>
    <p>5.4
        上述及其他任何本服务包含的内容的知识产权均受到法律保护，未经裂变网盘书面许可或本服务协议明确允许的以外，任何人不得以任何形式对本网站服务部分或全部内容进行如修改、出售、分发、复制、创作衍生品等行为或将上述行为用于商业用途。
    </p>
    <p>5.5
        用户在本网站上发布的信息不得侵犯任何第三人的知识产权，未经相关权利人之事先书面同意，用户不得以任何方式制作、上传、发布、修改、传播或复制等任何受著作权法、商标法保护的材料或属于其他人的专有信息。如果用户上传的内容允许其他用户下载、查看、收听或以其他方式访问或分发，其必须保证该内容的发布和相关行为实施符合相关知识产权法律法规中相关的版权政策，包括但不限于：
    </p>
    <ul class="text-secondary">
        <li class="pb-2">用户在收到侵权通知之时，应立即删除或禁止访问声明的侵权内容，并同时联系递送通知的人员以了解详细信息。</li>
        <li class="pb-2">用户知悉并同意裂变网盘将根据相关法律法规对第三方发出的合格的侵权通知进行处理，并按照要求删除或禁止访问声明的侵权内容，采用并实施适当的政策，以期杜绝在相应条件下重复侵权。
        </li>
    </ul>


</div>


<div id="privacy" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">6. 隐私保护</h3>
    </div>
    <!-- End Title -->

    <p>裂变网盘重视用户信息的保护，并制定《隐私政策声明》，详见<a href="#"  target="_blank">###</a></p>



</div>

<div id="disclaimer" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">7. 免责声明</h3>
    </div>
    <!-- End Title -->
    <p>7.1 尽管裂变网盘将努力为你提供不受干扰的服务和本网站，但裂变网盘不保证（包括但不限于）：</p>
    <ul class="text-secondary">
        <li class="pb-2">通过本服务或本网站而获取的任何信息准确、完整、适用或合法；</li>
        <li class="pb-2">传送或接受或未能传送或接受任何性质的材料；</li>
        <li class="pb-2">本服务一定能满足用户的使用要求；</li>
        <li class="pb-2">本服务将不受干扰、及时、安全、准确、可靠、不会出错或没有感染第三方植入的病毒或其他恶意程序与裂变网盘有关的服务的质量、安全、可用性或任何其他方面内容；</li>
        <li class="pb-2">
            本网站为提高用户体验，可能提供进入第三方网站（统称“其他网站”）的链接，该链接可能设置于本网站内部或通过外部超级链接提供。用户知悉并了解，其他网站链接系仅为向你提供信息和便利之目的而设置，裂变网盘无法控制其他网站的内容，不保证第三方网站或信息的准确性等。<strong>用户如需使用其他网站，需自行判断，并承担因使用其他网站、内容而引起的所有风险，因该使用行为引起的纠纷由用户自行解决，与裂变网盘无关。裂变网盘亦不对其他网站或其他网站提供的内容、产品或服务承担任何间接的、特殊的、附带的、后果性的或惩罚性的损害承担责任。</strong>
        </li>
    </ul>

    <p><strong>7.2 鉴于网络服务的特殊性，用户同意裂变网盘有权在无需事先通知用户的情况下随时变更、中止或终止部分或全部网络服务且不承担任何责任。</strong></p>
    <p><strong>7.3
            用户理解并知悉，裂变网盘需要定期或不定期的对提供本服务的平台或相关设备进行检修、维护、升级或者安装新设施或引入新服务，如因此类情况造成用户使用本服务受到限制，不论该限制系收费或者免费提供的服务，裂变网盘无需为此承担任何责任，但裂变网盘将尽可能事先进行通告并尽快恢复你的使用。</strong>
    </p>
    <p><strong>7.4
            裂变网盘可在任何时候为任何原因变更本服务或删除其部分功能。裂变网盘可在任何时候取消、中止或终止对用户的服务。裂变网盘取消或终止服务的决定不需要理由或通知用户。一旦服务取消，用户使用本服务的权利立即终止。
            一旦本服务取消或终止，用户在本网站中储存的任何信息可能无法恢复，裂变网盘无需对用户或任何第三方承担责任。</strong></p>
    <p>7.5
        一旦得知出现任何错误或疏漏，裂变网盘将尽最大努力尽快予以纠正。但是，裂变网盘不能保证服务或本网站不会出错，且如果适用法律没有相反的规定，裂变网盘将不为该等错误或疏漏承担责任。如果出现错误或疏漏，请你立即通过以下电子邮箱向裂变网盘报告：<a
            href="mailto:admin@eenot.com">admin@eenot.com</a>。</p>
    <p>7.6 用户明确同意其使用本网站在线服务所存在的风险将完全由其自己承担；因其使用本网站在线服务而产生的一切后果也由其自己承担，裂变网盘无需承担任何责任。</p>


</div>


<div id="liability" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">8. 违约责任</h3>
    </div>
    <!-- End Title -->
    <p>8.1 用户同意保障和维护裂变网盘及其他用户的利益，如因用户违反有关法律、法规或本协议项下的任何条款而给裂变网盘或任何其他第三人造成损失，用户同意承担由此造成的损害赔偿责任。</p>
    <p>8.2 因用户或用户授权的任何人违反本协议约定造成裂变网盘的所有损失、责任或费用（包括但不限于任何人因如下原因而对裂变网盘提起的任何诉求或法律程序等），用户应承担赔偿责任。</p>
    <p><strong>8.3 若用户使用本服务的行为不符合本协议的约定，或裂变网盘在经由通知、举报等途径发现时，有权在无需事先通知用户的情况下立即中止或终止向用户提供部分或全部服务。</strong></p>
    <p><strong>8.4
            用户若通过本服务散布和传播反动、色情或其他违反国家法律、法规的信息，本网站或本服务的系统记录有可能作为用户违反法律法规的证据；因用户进行上述内容在本服务的制作、上传、存储、传播，无论系公开还是私下传送，而导致任何第三方提出索赔要求或衍生的任何损害或损失，由用户自行承担全部责任。</strong>
    </p>

</div>


<div id="delivery" class="space-bottom-1">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">9. 通知和送达</h3>
    </div>
    <!-- End Title -->
    <p>本协议项下所有的通知均可通过重要页面公告、电子邮件或常规的信件传送等方式进行；该等通知于发送之日视为已送达收件人。</p>
</div>


<div id="others">
    <!-- Title -->
    <div class="mb-3">
        <h3 class="h5">10. 其他规定</h3>
    </div>
    <!-- End Title -->
    <p>10.1 本协议的版权归裂变网盘所有。</p>
    <p>10.2 本协议构成双方对本协议之约定事项及其他有关事宜的完整协议，除本协议规定的之外，未赋予本协议各方其他权利。</p>
    <p>10.3 如本协议中的任何条款无论因何种原因完全或部分无效或不具有执行力，本协议的其余条款仍应有效并且有约束力。</p>
    <p>10.4
        本协议的订立、执行和争议的解决均应适用中华人民共和国法律，不包括其冲突法。如果用户与裂变网盘就与本协议相关的内容发生争议，双方应尽量友好协商，协商不成时，用户同意将争议提交至裂变网盘注册地有管辖权的人民法院通过诉讼方式解决。
    </p>
    <p>10.5 欢迎使用裂变网盘旗下各项服务，并在本协议基础上，同时遵守该各项服务的具体约定。</p>

    <div id="accounts-rights" class="mb-3">
        <h4 class="h6">请您阅读补充协议：</h4>
    </div>
    <!-- End Title -->
    <ul class="text-secondary">
        <li class="pb-2">欢迎用户使用裂变网盘VIP会员服务（本协议的补充协议），请你遵守<a href="#" target="_blank">裂变网盘会员服务条款</a>；</li>
    </ul>
</div>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">我同意</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<?php require TEMPLATE . '/inc/_global/views/footer_start.php'; ?>
<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/bootstrap-notify/bootstrap-notify.min.js'); ?>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>jQuery(function(){ Dashmix.helpers('notify'); });</script>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_signup.min.js'); ?>


<?php require TEMPLATE . '/inc/_global/views/footer_end.php'; ?>