<!-- Refer & Earn Modal -->
<div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body pt-4 pt-md-0 px-0 pb-md-0">
        <div class="text-center mb-6">
          <h4 class="mb-2">Refer & Earn</h4>
          <p class="text-center mb-6">Invite your friend to {{config('variables.templateName')}}, if they sign up, you and your friend will get 30 days free trial.</p>
        </div>
        <div class="row py-6">
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class='ri-send-plane-2-line ri-40px'></i>
              </div>
            </div>
            <div class="text-center">
              <h6 class="mb-2">Send Invitation 🤟🏻</h6>
              <p class="mb-lg-0">Send your referral link to your friend</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class='ri-pages-line ri-40px'></i>
              </div>
            </div>
            <div class="text-center">
              <h6 class="mb-2">Registration 👩🏻‍💻</h6>
              <p class="mb-lg-0">Let them register to our services</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class='ri-gift-line ri-40px'></i>
              </div>
            </div>
            <div class="text-center">
              <h6 class="mb-2">Free Trial 🎉</h6>
              <p class="mb-0">Your friend will get 30 days free trial</p>
            </div>
          </div>
        </div>
        <hr class="my-6" />
        <h5 class="mb-5">Invite your friends</h5>
        <form class="row g-4" onsubmit="return false">
          <div class="col-lg-10">
            <label class="mb-2" for="modalRnFEmail">Enter your friend’s email address and invite them to join {{config('variables.templateName')}} 😍</label>
            <input type="text" id="modalRnFEmail" class="form-control form-control-sm" placeholder="example@domain.com" aria-label="example@domain.com">
          </div>
          <div class="col-lg-2 d-flex align-items-end">
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <h5 class="mt-6 mb-5">Share the referral link</h5>
        <form class="row g-4" onsubmit="return false">
          <div class="col-lg-9">
            <label class="mb-2" for="modalRnFLink">You can also copy and send it or share it on your social media. 🥳</label>
            <div class="input-group input-group-sm input-group-merge">
              <input type="text" id="modalRnFLink" class="form-control" value="{{config('variables.creatorUrl')}}">
              <span class="input-group-text text-primary cursor-pointer text-uppercase" id="basic-addon33">Copy link</span>
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-end">
            <div class="btn-social">
              <button type="button" class="btn btn-icon btn-facebook"><i class="tf-icons ri-facebook-circle-line ri-22px"></i></button>
              <button type="button" class="btn btn-icon btn-twitter"><i class="tf-icons ri-twitter-line ri-22px"></i></button>
              <button type="button" class="btn btn-icon btn-linkedin"><i class="tf-icons ri-linkedin-line ri-22px"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Refer & Earn Modal -->
