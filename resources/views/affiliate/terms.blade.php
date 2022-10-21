@extends('layouts.instructor')
@section('page_title','Affiliate | Terms')
@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top-md"
                         style="background: url(../../assets/images/background/profile-bg.jpg) no-repeat;background-size: cover;"></div>
                    <div class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}"
                                     class="avatar-xl rounded-circle border border-4 border-white position-relative"
                                     alt=""/>
                                <a href="#"
                                   class="position-absolute top-0 end-0"
                                   data-bs-toggle="tooltip"
                                   data-placement="top"
                                   title=""
                                   data-original-title="Verified">
                                    <img src="{{asset('assets/images/svg/checked-mark.svg')}}" alt="" height="30" width="30"/>
                                </a>
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">Jenny Wilson</h2>
                                <p class="mb-0 d-block">@Jennywilson</p>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm d-none d-md-block">Copy Referral Link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Content -->
            <div class="row mt-0 mt-md-4">
                @include('affiliate.nav')
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="row">
                            <!-- row -->

                            <div class="mt-20  col-md-8">
                                <!-- heading -->
                                <h1 class="display-5 ms-5 fw-bold mb-0 ">Lentoria Affiliate Programme</h1>
                                <h1 class="display-4 ms-5 fw-bold  mb-3">General Terms</h1>
                                <!-- para -->
                                <p class="lead ms-5"> A no-nonsense guide to Lentoria Affiliate Programs</p>
                            </div>
                            <div class="ms-0 col-md-4">
                                <img style="width: 400px; height: 500px;" src="{{asset('assets/images/about/16.jpg')}}" alt=" "
                                     class="img-fluid rounded-5  d-md-block "/>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-8">
                                <h1 class="display-4 ms-2 fw-bold mb-0 ">Welcome to Livepetal’s </h1>
                                <h1 class="display-4 ms-2 fw-bold  mb-3">Affiliate Program Terms</h1>
                                <div class="row ms-2">
                                    <div class="col-6 justify">

                                        <p><b><span style="color: green">1. </span></b> Welcome to the Livepetal
                                            affiliate
                                            Program (Affiliate program) we’re really glad you are keen on referring
                                            Livepetal’s websites to other people. These terms explain the rules that
                                            apply
                                            to the affiliate program (we’ll call these the General Affiliate Program
                                            Terms).
                                            the Livepetal privacy policy is also incorporated into these terms.</p>

                                        <p><b><span style="color: green">2. </span></b>keep in mind that these terms
                                            form
                                            part of the master campaign agreement between you and us,which you sign up
                                            to in
                                            the Affiliate Program online platform that’s provided by Livepetal ( the
                                            Livepetal platform which gives you access to your Livepetal account). The
                                            Livepetal platform also contains some specific terms such as payment
                                            settings
                                            which also form part of our agreement with you </p>

                                    </div>
                                    <div class="col-6">
                                        <p>(we’ll call these the Platform Terms). the Livepetal platform also includes a
                                            media partner services agreement between you and the Livepetal, which
                                            governs
                                            the platform services and use and access to those services.</p>
                                        <p><b><span style="color: green">3. </span></b>When we say ‘you’ in these
                                            affiliate
                                            program General Terms we are referring to you, the Livepetal affiliate.when
                                            we
                                            refer to the ‘website’ we’re talking about Livepetal websites. When we say
                                            ‘we’,
                                            ‘us’ or ‘ Livepetal’ it’s because that’s who we are and we own and run the
                                            websites.</p>
                                        <p><b><span style="color: green">4. </span></b>Read on for the details about
                                            your
                                            responsibilities, how it all works and the process of earning referral
                                            income
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{asset('assets/images/about/301.png')}}" alt=" "

                                     class="img-fluid rounded-5  d-md-block "/>

                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 col-md-4 p-5 justify">
                                <h1 class="display-4 ms-2 fw-bold mb-0  ">Becoming An Affiliate</h1>
                                <p><b><span style="color: green">5.</span></b>To become a Livepetal Affiliate you must
                                    first
                                    apply to join the program via the platform and by doing so, you accept the platform
                                    Terms, Agreement these Affiliate Program General Terms, and the Livepetal privacy
                                    policy(and ,to avoid doubt).</p>
                                <p><b><span style="color: green">6. </span></b>.We will assess your application and may
                                    accept your application,as long as you can promote the Livepetal program , you have
                                    become an Affiliate.</p>

                                <p><b><span style="color: green">7.</span></b>Before you can be paid ,you will need to
                                    ensure submit any necessary tax documents and payout information.</p>
                                <p style="background-color: green; border-radius: 10px; color: white; padding: 5px">The
                                    next
                                    session will summarise how the affiliate program works</p>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-12 p-5">
                                <img src="{{asset('assets/images/about/07.png')}}" alt=" "

                                     class="img-fluid rounded-5  d-md-block "/>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="row ms-2">
                            <div class="col-lg-4 col-sm-12 col-md-4 justify">
                                <h1 class="display-4 ms-2 fw-bold mb-0"> How Its Works </h1>
                                <p>These sections explain how earning an income through our Affiliate Program works and
                                    Important information about payments to your account. Take a close look!</p>
                                <p><b><span style="color: green">8.</span></b> Affiliate Program Offer: As a Livepetal
                                    Affiliate, you have the option of participating in offer terms, which are made
                                    available
                                    to you in the Livepetal Platform. The Offer Terms will have additional details (like
                                    what constitute a successful referral and the percentage commission you can earn).
                                    these
                                    Offer Terms details are explained in the Livepetal Platform and are incorporated
                                    into
                                    these Affiliate Program General Terms by Reference.</p>
                                <P><b><span style="color: green">9.</span></b>
                                    Referral links and code: Each of the offer that you choose to participate in has a
                                    unique referral Link that can be generated via your Livepetal account, once you have
                                    join the Affiliate Program.Simply paste the link provided or an approved Affiliate
                                    Program Ad on your website, and if the terms of the Offer Terms are met, you may
                                    earn
                                    Affiliate Program referrals earnings. </P>
                                <P><b><span style="color: green">10.</span></b>Referral earning: The earnings you will
                                    receive for successfully meeting the Offer Terms are detailed
                                </P>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-4 justify">
                                <p style="background-color: green; border-radius: 10px; color: white; padding:5px">NB:
                                    offer
                                    can vary from time to time so make sure you consider each of the offer Terms from
                                    within
                                    the Livepetal Platform.</p>
                                <p>on each Offer Terms page.prices and fees are exclusive of transaction taxes where
                                    relevant (like VAT). you are responsible for paying all other fees and taxes
                                    associated
                                    with your referral earnings.</p>

                                <P><b><span style="color: green">11.</span></b>
                                    More details : here are a few important points about how it works:</P>

                                <P><b><span style="color: green">A.</span></b> <i>We use cookies and other similar
                                        technologies to track people who clicked on your link, it is your responsibility
                                        to
                                        ensure that you have provided all disclosures and obtained all necessary rights,
                                        consents and permissions to drop relevant cookies to allow required tracking
                                        ,using
                                        or sharing of any relevant person’s data and you represent and warrant to us
                                        that
                                        you have done this.</i></P>
                                <P><b><span style="color: green">B.</span></b> <i>If a person doesn’t allow cookies or
                                        clears their cookies, then we may not be able to track them and in these
                                        circumstances, we are not liable to pay referral earnings on that persons
                                        activity.</i></P>

                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-4 justify">

                                <P><b><span style="color: green">C.</span></b><i>
                                        If a person clicks on your referral link and then later they click on someone
                                        else”s, it is the first link they clicked on that counts( that is,we have a
                                        first-click attribution policy). Multiple Livepetal Affiliate will be paid in
                                        respect of the same sale or transaction.you agree that if there is a dispute
                                        about
                                        payment, the sole determination of Livepetal will be final and binding.</i></P>
                                <P><b><span style="color: green">D.</span></b><i>The applicable cookie period will be
                                        described in your offer terms.But generally speaking:
                                        For Livepetal market, if a person clicks your link, they have some days before
                                        the
                                        cookie expires.
                                        The terms of any offer terms must be met within that cookie period. After the
                                        expiry
                                        of the period no referral earnings.</i></P>

                                <P><b><span style="color: green">E.</span></b><i>Commission is not paid for self
                                        referrals(that is where the affiliate and buyer are the same person).Referrals
                                        from
                                        fraudulent activity (including self-referral) may show up in your account but
                                        will
                                        be deducted from your final monthly referral earnings.</i></P>
                                <P><b><span style="color: green">F.</span></b><i>Referral earnings and the other
                                        performance
                                        data will appear in your Livepetal account.</i></P>
                            </div>

                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="row ms-2">
                            <div class="col-lg-8 col-sm-12 col-md-8 justify">
                                <h1 class="display-4 ms-2 fw-bold mb-0 ">How do payments of </h1>
                                <h1 class="display-4 ms-2 fw-bold  mb-3">referrals income work</h1>
                                <div class="row ms-2">
                                    <div class="col-6">

                                        <p><b><span style="color: green">12. </span></b> Your Affiliate Program referral
                                            earnings are separate to any other payments you may be eligible to receive
                                            from
                                            Livepetal as a buyer or author.</p>

                                        <p><b><span style="color: green">13. </span></b>.Payments will be made in
                                            accordance
                                            with the Platform Terms.</p>
                                        <p><b><span style="color: green">14. </span></b>All payments you are entitled to
                                            will be listed in your Livepetal account and paid to you via the payment
                                            option
                                            provided by Livepetal.</p>
                                        <p><b><span style="color: green">15. </span></b> You may bear some or all
                                            expenses
                                            incurred by us in paying to you via our third party provider.</p>
                                        <p><b><span style="color: green">16. </span></b>.Payment errors: if there are
                                            errors
                                            with your nominated payment details, including if:


                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-md-6">
                                        <p><b><span style="color: green">A</span></b><i> We do not have the correct
                                                payment
                                                details;</i></p>
                                        <p><b><span style="color: green">B</span></b><i> We can’t contact you using the
                                                contact details that you have supplied or</i></p>
                                        <p><b><span style="color: green">17. </span></b>Currency conversion: payments
                                            will
                                            be made in the platform’s primary currency via the Livepetal platform. We
                                            have
                                            no responsibility for currency conversion.</p>
                                        <p><b><span style="color: green">18. </span></b> Refunds and reversals: if a
                                            transaction on Livepetal websites relating to your Affiliate program
                                            referral
                                            earnings is subject to a refund or reversal by a payment provider or by us,
                                            then
                                            the transaction is considered unsuccessful and you must return the funds to
                                            us
                                            via the Livepetal platform.</p>


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-4">
                                <p><b><span style="color: green">19. </span></b>.Fraud: if we have reason to believe
                                    your
                                    Affiliate Program account is being used to conduct fraudulent transactions or is in
                                    any
                                    way associated to fraudulent activity we may reject payment, terminate your account
                                    ,and
                                    or require you to return the funds to us via the Livepetal platform.</p>
                                <p><b><span style="color: green">20. </span></b>Tax. You are responsible for paying all
                                    fees
                                    and taxes, including all indirect taxes such as VAT or sales tax, associated with
                                    your
                                    use of the Affiliate Program wherever levied. We my collect geographical location
                                    information to determine your location,which may be used for tax purposes.</p>
                                <p>Despite this, if required by law, we may deduct or withhold taxes (including
                                    withholding
                                    tax) in connection with your being an affiliate.
                                    If so, we will give relevant documentation that required by law about the deduction
                                    or
                                    withholding like documentation allowing you to access your rebates, or to manage
                                    your
                                    tax affairs).</p>

                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row ms-2">
                            <div class="col-12">
                                <h1 class="display-4 ms-2 fw-bold mb-2 ">Things You Can't Do </h1>
                                <div class="row ms-2">
                                    <div class="col-lg-4 col-sm-12 col-md-4">

                                        <p><b><span style="color: green">21 </span></b>You must not do any of these
                                            things:
                                        </p>

                                        <p><b><span style="color: green">A. </span></b><i>Do anything that might be
                                                confusing , misleading or deceptive to users. This includes ( but isn't
                                                limited to) doing anything that may confuse user (or potentially confuse
                                                them) about whether your website is operated or endorsed by us (for
                                                example
                                                by copying design elements from our website).</i></p>
                                        <p><b><span style="color: green">B. </span></b> <i>Use Livepetal brands
                                                trademarks
                                                and any other intellectual property (being Livepetal intellectual
                                                property),
                                                other than through approved affiliate program ads we make available via
                                                your
                                                Livepetal account.</i></p>

                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <p><b><span style="color: green">C. </span></b><i>
                                                Use domain name , search engine keyword or pay-per click advertising
                                                that
                                                use any Livepetal trademarks or variations and misspellings .</i></p>
                                        <p><b><span style="color: green">D. </span></b><i>Bid on purchase acquire or
                                                register search engine keywords, domain names , or other identifying
                                                search
                                                terms or titles that are the same or similar to intellectual property
                                                (including misspellings) owned or controlled by us (being Livepetal
                                                intellectual property) Affiliate are not allowed to outrank or outbid
                                                the
                                                Lentoria on any relevant Livepetal ad keywords.</i></p>
                                        <p><b><span style="color: green">E. </span></b><i>In an effort to create traffic
                                                into Livepetal businesses, send unsolicited email or other messaging
                                                that in
                                                any way may constitute spam. </i></p>


                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <p><b><span style="color: green">F. </span></b><i>Do anything that would amount
                                                to
                                                breach of any laws including, but not limited to privacy, intellectual
                                                property, and spam laws. </i></p>
                                        <p><b><span style="color: green">G. </span></b><i>Make any representation on
                                                behalf
                                                of Livepetal. </i></p>
                                        <p><b><span style="color: green">H. </span></b><i>Do anything that is directly
                                                or
                                                indirectly in contravention of these Affiliate program General Terms or
                                                any
                                                direction given to you by us.</i></p>
                                        <p><b><span style="color: green">I. </span></b><i>Provide us with any
                                                information
                                                that is not true, accurate or complete.</i></p>
                                        <p><b><span style="color: green">J. </span></b><i>Disclose your password or
                                                username
                                                to any one if you realize there’s any unauthorized use of your password
                                                or
                                                any breach of security you need to let us know immediately.</i></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row ms-2">
                            <div class="col-12">
                                <h1 class="display-4 ms-2 fw-bold mb-2 ">Legal Housekeeping</h1>
                                <div class="row ms-2">
                                    <div class="col-lg-4 col-sm-12 col-md-4">

                                        <p><b><span style="color: green">22 </span></b>Your compliance: we reserve the
                                            right
                                            to decide in our sole discretion whether or not your use of the Affiliate
                                            program complies with any applicable laws ( which includes these affiliate
                                            Program General Terms),the Livepetal privacy policy or the platform terms,if
                                            we
                                            decide that you have not complied, we can, based on our reasonable
                                            discretion
                                            withhold your referral earnings and may disable your account.</p>
                                        <p><b><span style="color: green">23 </span></b>Termination: these Affiliate
                                            Program
                                            General terms start from the date of our approval of your application and we
                                            continue until terminated. On termination you must promptly stop using, and
                                            must
                                            delete relevant links and Livepetal intellectual property. at any time by
                                            removing the relevant affiliate links</p>

                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <p><b><span style="color: green">24 </span></b>Termination by you:You may
                                            terminate
                                            your participation in one or more offer terms of the Affiliate Program</p>
                                        <p><b><span style="color: green">25 </span></b>Termination by us: we may
                                            terminate
                                            or suspend your participation in one or more offer Terms or these Affiliate
                                            Program General Terms:
                                            If we reasonably believe there is a risk associated with you, your account ,
                                            or
                                            that payment, including if it breaches a law or regulation.examples of where
                                            we
                                            might do this include transactions where the payment is from or to a person
                                            or
                                            country sanctioned by an authority.</p>
                                        <p><b><span style="color: green">26 </span></b>Sanctions compliance: you
                                            promised
                                            that you are not located in a sanctioned country and are not on a sanctioned
                                            persons lists.</p>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <p><b><span style="color: green">27. </span></b>Modifications: we may change ,
                                            suspend or discontinue any aspect of the offer terms or the Affiliate
                                            program.
                                            We may also remove or modify any approved tags, text, or graphics for the
                                            Affiliate program. You agree to promptly implement any quest from us to
                                            remove
                                            or modify any link, graphic or banner and that is being used by you as part
                                            of
                                            the affiliate Program.</p>
                                        <p><b><span style="color: green">27. </span></b>Your use of other services: you
                                            must
                                            comply with the requirements of any third party services you use in
                                            connection
                                            with the Affiliate Program, like email-providers, social networking services
                                            and
                                            networks as long as doing so does not cause you to violate the terms of our
                                            affiliate program or the Livepetal Platform.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row ms-2">
                            <div class="col-lg-4 col-sm-12 col-md-4">

                                <p><b><span style="color: green">29. </span></b>Privacy: we respect your privacy. When
                                    you
                                    become a Livepetal Affiliate you will be asked to provide some information about
                                    yourself. This information may be used by us with managing the Affiliate Program,
                                    including marketing activities.
                                    our privacy policy explains how will deal with your information and it form part of
                                    these terms.</p>
                                <p><b><span style="color: green">30. </span></b>Confidentiality: we value your
                                    information
                                    and take reasonable precautions to protect it. While we take reasonable steps to
                                    preserve the security of your information, please be aware that we can’t promise
                                    that
                                    your use of our Affiliate Program will be Confidential,and we can’t promise that any
                                    information you provide to us is perfectly secure, while aware of confidential
                                    information about us, the Affiliate program or a user.</p>
                                <p style="background-color: green; color: white; border-radius: 10px; padding: 5px">You
                                    promise to not disclose any confidential information made available to you through
                                    the
                                    affiliate program to any other person.</p>

                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-4">
                                <p><b><span style="color: green">31. </span></b>Intellectual property: we own all the
                                    Livepetal content we have put on our websites including the design, compilation,and
                                    look
                                    and feel of the Livepetal websites platforms, and copyright, trademarks, logos,
                                    designs
                                    and other intellectual property(both registered and unregistered present and
                                    future),
                                    unless otherwise stated and excluding content owned by others(we’ll call this the
                                    Livepetal Intellectual Property).</p>
                                <p><b><span style="color: green">32. </span></b>Livepetal companies: if an indemnity,
                                    limitation or disclaimer of liability, promise or release (a ‘benefit’) is given in
                                    our
                                    favour in these terms or the platform terms we hold that benefit on the trust for
                                    the
                                    other companies.we may enforce entrust that benefits as for or on behalf of the
                                    other
                                    Livepetal companies as beneficiaries under that trust.</p>
                                <p><b><span style="color: green">33. </span></b>We may use the services of another
                                    Livepetal
                                    companies to conduct the payment, or other activities with you like paying referral
                                    earnings.</p>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-4">

                                <img src="{{asset('assets/images/about/07.png')}}" alt=" "

                                     class="img-fluid rounded-5  d-md-block "/>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="row ms-2">
                            <div class="col-12">
                                <h1 class="display-4 ms-2 fw-bold mb-2 "></h1>
                                <div class="row ms-2">
                                    <div class="col-lg-4 col-sm-12 col-md-4">

                                        <p>These sections mean that you protect us from costs and claims that happen
                                            because
                                            of your actions on the website, and that our liability to you is
                                            limited.</p>
                                        <p><b><span style="color: green">34 </span></b>Your indemnity to us : you are
                                            liable
                                            and solely responsible for:</p>
                                        <p><b><span style="color: green">A. </span></b><i>Your use of the website and
                                                the
                                                Affiliate Program;</i></p>
                                        <p><b><span style="color: green">B. </span></b><i>The services, message,
                                                content,
                                                information,software or other materials you send and use under the
                                                Affiliate
                                                Program;</i></p>
                                        <p><b><span style="color: green">C. </span></b><i>Your breach of any
                                                intellectual
                                                property rights belonging to others;</i></p>
                                        <p><b><span style="color: green">D. </span></b><i>Your breach of these Affiliate
                                                Program General Terms;</i></p>
                                        <p><b><span style="color: green">E. </span></b><i>Your breach of any industry
                                                code,
                                                regulation or law that applies.</i></p>

                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <p><b><span style="color: green">35. </span></b>We have no responsibility to you
                                            or
                                            to any other person for all liabilities, and costs expenses (including legal
                                            fees) and loss arising from third party claims due to any of the matters set
                                            out
                                            in the previous clause 34 (claims) and you agree to indemnity us, our
                                            director,
                                            officers, employees and agent from all claims.</p>
                                        <p><b><span style="color: green">36. </span></b>We reserve the right, at our own
                                            expense, to assume the exclusive defence and control of any matter otherwise
                                            subject to indemnification by you,and in such case, you agree to cooperate
                                            within our defence of the matter.</p>
                                        <p><b><span style="color: green">37. </span></b>Disclaimer and limitation of
                                            liability: in some places there may be consumer or fair trading laws that
                                            apply
                                            and that may give you rights that we cannot exclude, restrict or
                                            modify(non-excludable law) we do not exclude or modify any non-exclsudable
                                            law.
                                            Except as provide in a non-excludable law, we are bound only by the express
                                            promises made in these Affiliate Program General Terms and we are not bound
                                            by
                                            implied terms.</p>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <p><b><span style="color: green">38. </span></b>Changes to Affiliate Program
                                            terms:
                                            we may change these terms at any times and, if we make changes, we will take
                                            reasonable steps to let our members know about the changes. You can also
                                            keep
                                            track of whether changes have been made to our terms by referring to the
                                            version
                                            and effective date at the footer of the terms.</p>
                                        <p><b><span style="color: green">39. </span></b>Applicable law:we control and
                                            operate the affiliate program from our offices in Nigeria. The law of
                                            Nigerian
                                            governs these Affiliate program General Terms, and you submit to the
                                            jurisdiction of the courts there.</p>
                                        <p><b><span style="color: green">40. </span></b>We are glad you have made it to
                                            the
                                            end of these Affiliate Program General Terms. we wish you all the best. You
                                            can
                                            always revisit these Affiliate Program General Terms and the Livepetal
                                            privacy
                                            policy and the platform terms in the future and if you have any question you
                                            can
                                            send message to our email@livepetal.com</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="row">
                            <!-- row -->

                            <div class="mt-10 col-md-4">
                                <!-- heading -->
                                <h1 class="display-3 ms-5 fw-bold mb-0 ">Go Forth</h1>
                                <h1 class="display-4 ms-5 fw-bold  mb-3">And Refer!</h1>
                                <!-- para -->
                            </div>
                            <div class="ms-0 col-md-8">
                                <img src="{{asset('assets/images/about/12.jpg')}}" alt=" "
                                     class="img-fluid rounded-5  d-md-block "/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- Card -->
    </div>

@endsection
