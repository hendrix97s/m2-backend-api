<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:9000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.36.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.36.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="campaign">
                    <a href="#campaign">Campaign</a>
                </li>
                                    <ul id="tocify-subheader-campaign" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="campaign-GETapi-v1-campaign">
                        <a href="#campaign-GETapi-v1-campaign">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="campaign-POSTapi-v1-campaign">
                        <a href="#campaign-POSTapi-v1-campaign">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="campaign-GETapi-v1-campaign--uuid-">
                        <a href="#campaign-GETapi-v1-campaign--uuid-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="campaign-PUTapi-v1-campaign--uuid-">
                        <a href="#campaign-PUTapi-v1-campaign--uuid-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="campaign-DELETEapi-v1-campaign--uuid-">
                        <a href="#campaign-DELETEapi-v1-campaign--uuid-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="city">
                    <a href="#city">City</a>
                </li>
                                    <ul id="tocify-subheader-city" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="city-GETapi-v1-city">
                        <a href="#city-GETapi-v1-city">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-POSTapi-v1-city">
                        <a href="#city-POSTapi-v1-city">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-GETapi-v1-city--uuid-">
                        <a href="#city-GETapi-v1-city--uuid-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-PUTapi-v1-city--uuid-">
                        <a href="#city-PUTapi-v1-city--uuid-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="city-DELETEapi-v1-city--uuid-">
                        <a href="#city-DELETEapi-v1-city--uuid-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="group">
                    <a href="#group">Group</a>
                </li>
                                    <ul id="tocify-subheader-group" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="group-GETapi-v1-group">
                        <a href="#group-GETapi-v1-group">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="group-POSTapi-v1-group">
                        <a href="#group-POSTapi-v1-group">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="group-GETapi-v1-group--uuid-">
                        <a href="#group-GETapi-v1-group--uuid-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="group-PUTapi-v1-group--uuid-">
                        <a href="#group-PUTapi-v1-group--uuid-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="group-DELETEapi-v1-group--uuid-">
                        <a href="#group-DELETEapi-v1-group--uuid-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-5" class="tocify-header">
                <li class="tocify-item level-1" data-unique="offer">
                    <a href="#offer">Offer</a>
                </li>
                                    <ul id="tocify-subheader-offer" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="offer-GETapi-v1-offer">
                        <a href="#offer-GETapi-v1-offer">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="offer-POSTapi-v1-offer">
                        <a href="#offer-POSTapi-v1-offer">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="offer-GETapi-v1-offer--uuid-">
                        <a href="#offer-GETapi-v1-offer--uuid-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="offer-PUTapi-v1-offer--uuid-">
                        <a href="#offer-PUTapi-v1-offer--uuid-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="offer-DELETEapi-v1-offer--uuid-">
                        <a href="#offer-DELETEapi-v1-offer--uuid-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="offer-POSTapi-v1-offer--uuid--products">
                        <a href="#offer-POSTapi-v1-offer--uuid--products">Link a product to an offer.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-6" class="tocify-header">
                <li class="tocify-item level-1" data-unique="product">
                    <a href="#product">Product</a>
                </li>
                                    <ul id="tocify-subheader-product" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="product-GETapi-v1-product">
                        <a href="#product-GETapi-v1-product">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-POSTapi-v1-product">
                        <a href="#product-POSTapi-v1-product">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-GETapi-v1-product--uuid-">
                        <a href="#product-GETapi-v1-product--uuid-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-PUTapi-v1-product--uuid-">
                        <a href="#product-PUTapi-v1-product--uuid-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-DELETEapi-v1-product--uuid-">
                        <a href="#product-DELETEapi-v1-product--uuid-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: August 25 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:9000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="campaign">Campaign</h1>

    

            <h2 id="campaign-GETapi-v1-campaign">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-campaign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/campaign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/campaign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-campaign">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;List of Campaigns&quot;,
    &quot;data&quot;: [
        {
            &quot;uuid&quot;: &quot;1ca578bb-8e76-4f05-8991-088f4d5a742a&quot;,
            &quot;slug&quot;: &quot;rosalyn-ratke&quot;,
            &quot;name&quot;: &quot;Rosalyn Ratke&quot;,
            &quot;description&quot;: &quot;Veniam nam quos fugiat dolorem consectetur quo. Omnis facere harum qui aperiam. Consectetur repellendus ut aliquid vero.&quot;,
            &quot;offer&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-campaign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-campaign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-campaign"></code></pre>
</span>
<span id="execution-error-GETapi-v1-campaign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-campaign"></code></pre>
</span>
<form id="form-GETapi-v1-campaign" data-method="GET"
      data-path="api/v1/campaign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-campaign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-campaign"
                    onclick="tryItOut('GETapi-v1-campaign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-campaign"
                    onclick="cancelTryOut('GETapi-v1-campaign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-campaign" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/campaign</code></b>
        </p>
                    </form>

            <h2 id="campaign-POSTapi-v1-campaign">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-campaign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:9000/api/v1/campaign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"New Campaign\",
    \"description\": \"qui\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/campaign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "New Campaign",
    "description": "qui"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-campaign">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;New Campaign created&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;8ba8cdc0-f1f7-4ed4-af46-5854b344ad76&quot;,
        &quot;slug&quot;: &quot;campaign-1&quot;,
        &quot;name&quot;: &quot;Campaign 1&quot;,
        &quot;description&quot;: &quot;Campaign 1 description&quot;,
        &quot;groups&quot;: [],
        &quot;offer&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-campaign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-campaign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-campaign"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-campaign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-campaign"></code></pre>
</span>
<form id="form-POSTapi-v1-campaign" data-method="POST"
      data-path="api/v1/campaign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-campaign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-campaign"
                    onclick="tryItOut('POSTapi-v1-campaign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-campaign"
                    onclick="cancelTryOut('POSTapi-v1-campaign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-campaign" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/campaign</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-campaign"
               value="New Campaign"
               data-component="body" hidden>
    <br>
<p>The name of campaign.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-v1-campaign"
               value="qui"
               data-component="body" hidden>
    <br>
<p>The description of Campaign.</p>
        </p>
        </form>

            <h2 id="campaign-GETapi-v1-campaign--uuid-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-campaign--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/campaign/cc811af3-fc3e-4aee-87e3-e7d096cff735" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/campaign/cc811af3-fc3e-4aee-87e3-e7d096cff735"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-campaign--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Campaign found successfully&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;cc811af3-fc3e-4aee-87e3-e7d096cff735&quot;,
        &quot;slug&quot;: &quot;lucious-rau-jr&quot;,
        &quot;name&quot;: &quot;Lucious Rau Jr.&quot;,
        &quot;description&quot;: &quot;Dolore repudiandae ipsum sed esse voluptatem odio. Sequi commodi earum deserunt autem id sapiente. Voluptas qui enim velit et soluta ea.&quot;,
        &quot;groups&quot;: [
            {
                &quot;uuid&quot;: &quot;cca0ec42-aee3-4c06-adb8-572136928b4c&quot;,
                &quot;slug&quot;: &quot;ferne-morar&quot;,
                &quot;name&quot;: &quot;Ferne Morar&quot;,
                &quot;description&quot;: &quot;Dignissimos necessitatibus tempora nihil sit quam dolorum odio. Maiores et molestiae amet sit rerum. Similique non ut neque voluptas ratione iste molestiae.&quot;,
                &quot;campaign_name&quot;: &quot;Lucious Rau Jr.&quot;,
                &quot;campaign_uuid&quot;: &quot;cc811af3-fc3e-4aee-87e3-e7d096cff735&quot;
            }
        ],
        &quot;offer&quot;: {
            &quot;uuid&quot;: &quot;5e451a6f-81f2-4624-98cb-2819e3829a82&quot;,
            &quot;discount_percentage&quot;: 52.24,
            &quot;campaign_uuid&quot;: &quot;cc811af3-fc3e-4aee-87e3-e7d096cff735&quot;,
            &quot;products&quot;: [
                {
                    &quot;uuid&quot;: &quot;04e6d3e4-aaba-4272-b381-612d78981ec2&quot;,
                    &quot;slug&quot;: &quot;harley-schiller&quot;,
                    &quot;name&quot;: &quot;Harley Schiller&quot;,
                    &quot;price&quot;: 90.93,
                    &quot;description&quot;: &quot;Nulla est fugit reprehenderit sapiente. Voluptatum vel molestias nesciunt et aliquid. A et vel nisi enim culpa neque est. Occaecati qui dignissimos incidunt alias.&quot;
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-campaign--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-campaign--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-campaign--uuid-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-campaign--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-campaign--uuid-"></code></pre>
</span>
<form id="form-GETapi-v1-campaign--uuid-" data-method="GET"
      data-path="api/v1/campaign/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-campaign--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-campaign--uuid-"
                    onclick="tryItOut('GETapi-v1-campaign--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-campaign--uuid-"
                    onclick="cancelTryOut('GETapi-v1-campaign--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-campaign--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/campaign/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="GETapi-v1-campaign--uuid-"
               value="cc811af3-fc3e-4aee-87e3-e7d096cff735"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Campaign.</p>
            </p>
                    </form>

            <h2 id="campaign-PUTapi-v1-campaign--uuid-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-campaign--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:9000/api/v1/campaign/61bc2469-cdd2-4abd-98ea-cad74d8a1ce7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Updated Campaign\",
    \"description\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/campaign/61bc2469-cdd2-4abd-98ea-cad74d8a1ce7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Updated Campaign",
    "description": "et"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-campaign--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;campaign.updated.success&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;61bc2469-cdd2-4abd-98ea-cad74d8a1ce7&quot;,
        &quot;slug&quot;: &quot;updated-campaign&quot;,
        &quot;name&quot;: &quot;Updated Campaign&quot;,
        &quot;description&quot;: &quot;Placeat eaque laboriosam commodi accusamus ea voluptatem quod. Aspernatur dolor excepturi dolores corporis. Ut ut maxime neque sed dolorum ut.&quot;,
        &quot;offer&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-campaign--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-campaign--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-campaign--uuid-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-campaign--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-campaign--uuid-"></code></pre>
</span>
<form id="form-PUTapi-v1-campaign--uuid-" data-method="PUT"
      data-path="api/v1/campaign/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-campaign--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-campaign--uuid-"
                    onclick="tryItOut('PUTapi-v1-campaign--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-campaign--uuid-"
                    onclick="cancelTryOut('PUTapi-v1-campaign--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-campaign--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/campaign/{uuid}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/campaign/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="PUTapi-v1-campaign--uuid-"
               value="61bc2469-cdd2-4abd-98ea-cad74d8a1ce7"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Campaign.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-v1-campaign--uuid-"
               value="Updated Campaign"
               data-component="body" hidden>
    <br>
<p>The name of campaign.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-v1-campaign--uuid-"
               value="et"
               data-component="body" hidden>
    <br>
<p>The description of Campaign.</p>
        </p>
        </form>

            <h2 id="campaign-DELETEapi-v1-campaign--uuid-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-campaign--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:9000/api/v1/campaign/61bc2469-cdd2-4abd-98ea-cad74d8a1ce7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/campaign/61bc2469-cdd2-4abd-98ea-cad74d8a1ce7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-campaign--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Campaign deleted&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-campaign--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-campaign--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-campaign--uuid-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-campaign--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-campaign--uuid-"></code></pre>
</span>
<form id="form-DELETEapi-v1-campaign--uuid-" data-method="DELETE"
      data-path="api/v1/campaign/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-campaign--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-campaign--uuid-"
                    onclick="tryItOut('DELETEapi-v1-campaign--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-campaign--uuid-"
                    onclick="cancelTryOut('DELETEapi-v1-campaign--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-campaign--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/campaign/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="DELETEapi-v1-campaign--uuid-"
               value="61bc2469-cdd2-4abd-98ea-cad74d8a1ce7"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Campaign.</p>
            </p>
                    </form>

        <h1 id="city">City</h1>

    

            <h2 id="city-GETapi-v1-city">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-city">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/city" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/city"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-city">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
 &quot;status&quot;:true,
 &quot;message&quot;:&quot;List of cities&quot;,
 &quot;data&quot;:[
   {
     &quot;uuid&quot;:&quot;33cee53c-2507-4e07-a5d8-61d3d48f8c35&quot;,
     &quot;slug&quot;:&quot;port-magdalen&quot;,
     &quot;name&quot;:&quot;Port Magdalen&quot;,
     &quot;country&quot;:&quot;Togo&quot;,
     &quot;state&quot;:&quot;Colorado&quot;
   },
]}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-city" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-city"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-city"></code></pre>
</span>
<span id="execution-error-GETapi-v1-city" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-city"></code></pre>
</span>
<form id="form-GETapi-v1-city" data-method="GET"
      data-path="api/v1/city"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-city', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-city"
                    onclick="tryItOut('GETapi-v1-city');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-city"
                    onclick="cancelTryOut('GETapi-v1-city');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-city" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/city</code></b>
        </p>
                    </form>

            <h2 id="city-POSTapi-v1-city">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-city">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:9000/api/v1/city" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Araras\",
    \"state\": \"SP.\",
    \"country\": \"Brazil\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/city"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Araras",
    "state": "SP.",
    "country": "Brazil"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-city">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;New city created&quot;,
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Araras&quot;,
        &quot;state&quot;: &quot;SP&quot;,
        &quot;country&quot;: &quot;Brazil&quot;,
        &quot;uuid&quot;: &quot;207f591a-ed61-4afd-b095-55516a0508b0&quot;,
        &quot;slug&quot;: &quot;araras&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-city" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-city"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-city"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-city" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-city"></code></pre>
</span>
<form id="form-POSTapi-v1-city" data-method="POST"
      data-path="api/v1/city"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-city', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-city"
                    onclick="tryItOut('POSTapi-v1-city');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-city"
                    onclick="cancelTryOut('POSTapi-v1-city');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-city" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/city</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-city"
               value="Araras"
               data-component="body" hidden>
    <br>
<p>string The name of city.</p>
        </p>
                <p>
            <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state"
               data-endpoint="POSTapi-v1-city"
               value="SP."
               data-component="body" hidden>
    <br>
<p>string The state of city.</p>
        </p>
                <p>
            <b><code>country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="country"
               data-endpoint="POSTapi-v1-city"
               value="Brazil"
               data-component="body" hidden>
    <br>
<p>string Name of country.</p>
        </p>
        </form>

            <h2 id="city-GETapi-v1-city--uuid-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-city--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/city/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/city/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-city--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;City found successfully&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;a9d2b989-6aa3-40d4-acf3-a4ba29f867c4&quot;,
        &quot;slug&quot;: &quot;araras&quot;,
        &quot;name&quot;: &quot;Araras&quot;,
        &quot;country&quot;: &quot;Brazil&quot;,
        &quot;state&quot;: &quot;SP&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-city--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-city--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-city--uuid-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-city--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-city--uuid-"></code></pre>
</span>
<form id="form-GETapi-v1-city--uuid-" data-method="GET"
      data-path="api/v1/city/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-city--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-city--uuid-"
                    onclick="tryItOut('GETapi-v1-city--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-city--uuid-"
                    onclick="cancelTryOut('GETapi-v1-city--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-city--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/city/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="GETapi-v1-city--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The Uuid of the City.</p>
            </p>
                    </form>

            <h2 id="city-PUTapi-v1-city--uuid-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-city--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:9000/api/v1/city/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Araras\",
    \"state\": \"SP.\",
    \"country\": \"Brazil\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/city/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Araras",
    "state": "SP.",
    "country": "Brazil"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-city--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;city updated&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;6c08ade6-9a23-4e73-b6a1-eb3732f390fe&quot;,
        &quot;slug&quot;: &quot;araras-updated&quot;,
        &quot;name&quot;: &quot;Araras updated&quot;,
        &quot;country&quot;: &quot;Brazil&quot;,
        &quot;state&quot;: &quot;SP&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-city--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-city--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-city--uuid-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-city--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-city--uuid-"></code></pre>
</span>
<form id="form-PUTapi-v1-city--uuid-" data-method="PUT"
      data-path="api/v1/city/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-city--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-city--uuid-"
                    onclick="tryItOut('PUTapi-v1-city--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-city--uuid-"
                    onclick="cancelTryOut('PUTapi-v1-city--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-city--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/city/{uuid}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/city/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="PUTapi-v1-city--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The Uuid of the City.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-v1-city--uuid-"
               value="Araras"
               data-component="body" hidden>
    <br>
<p>The name of city.</p>
        </p>
                <p>
            <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="state"
               data-endpoint="PUTapi-v1-city--uuid-"
               value="SP."
               data-component="body" hidden>
    <br>
<p>The state of city.</p>
        </p>
                <p>
            <b><code>country</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="country"
               data-endpoint="PUTapi-v1-city--uuid-"
               value="Brazil"
               data-component="body" hidden>
    <br>
<p>Name of country.</p>
        </p>
        </form>

            <h2 id="city-DELETEapi-v1-city--uuid-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-city--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:9000/api/v1/city/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/city/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-city--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;City deleted&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-city--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-city--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-city--uuid-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-city--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-city--uuid-"></code></pre>
</span>
<form id="form-DELETEapi-v1-city--uuid-" data-method="DELETE"
      data-path="api/v1/city/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-city--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-city--uuid-"
                    onclick="tryItOut('DELETEapi-v1-city--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-city--uuid-"
                    onclick="cancelTryOut('DELETEapi-v1-city--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-city--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/city/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="DELETEapi-v1-city--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The Uuid of the City.</p>
            </p>
                    </form>

        <h1 id="group">Group</h1>

    

            <h2 id="group-GETapi-v1-group">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-group">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/group" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/group"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-group">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;List of groups&quot;,
    &quot;data&quot;: [
        {
            &quot;uuid&quot;: &quot;5b4af9cc-28f9-466d-878b-9308f2309fa3&quot;,
            &quot;slug&quot;: &quot;dr-guillermo-von&quot;,
            &quot;name&quot;: &quot;Dr. Guillermo Von&quot;,
            &quot;description&quot;: &quot;Cumque sapiente quia nisi veniam. Nobis perferendis blanditiis quos earum occaecati vel.&quot;,
            &quot;campaign_name&quot;: &quot;Prof. Leon Walsh DVM&quot;,
            &quot;campaign_uuid&quot;: &quot;f9aa0435-5e95-4c45-aec6-e943d5aa0baf&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-group" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-group"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-group"></code></pre>
</span>
<span id="execution-error-GETapi-v1-group" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-group"></code></pre>
</span>
<form id="form-GETapi-v1-group" data-method="GET"
      data-path="api/v1/group"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-group', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-group"
                    onclick="tryItOut('GETapi-v1-group');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-group"
                    onclick="cancelTryOut('GETapi-v1-group');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-group" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/group</code></b>
        </p>
                    </form>

            <h2 id="group-POSTapi-v1-group">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-group">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:9000/api/v1/group" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Group 1\",
    \"campaign_uuid\": \"859d73b2-fb10-4cca-9f0f-45652eb21781\",
    \"description\": \"This is a group\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/group"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Group 1",
    "campaign_uuid": "859d73b2-fb10-4cca-9f0f-45652eb21781",
    "description": "This is a group"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-group">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;New Group created&quot;,
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Group 1&quot;,
        &quot;description&quot;: &quot;This is a group&quot;,
        &quot;uuid&quot;: &quot;4b7d2931-491f-444e-8e60-21c1a8decaa2&quot;,
        &quot;slug&quot;: &quot;group-1&quot;,
        &quot;campaign_name&quot;: &quot;Joanie Kshlerin&quot;,
        &quot;campaign_uuid&quot;: &quot;859d73b2-fb10-4cca-9f0f-45652eb21781&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-group" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-group"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-group"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-group" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-group"></code></pre>
</span>
<form id="form-POSTapi-v1-group" data-method="POST"
      data-path="api/v1/group"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-group', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-group"
                    onclick="tryItOut('POSTapi-v1-group');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-group"
                    onclick="cancelTryOut('POSTapi-v1-group');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-group" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/group</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-group"
               value="Group 1"
               data-component="body" hidden>
    <br>
<p>string The name of group.</p>
        </p>
                <p>
            <b><code>campaign_uuid</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="campaign_uuid"
               data-endpoint="POSTapi-v1-group"
               value="859d73b2-fb10-4cca-9f0f-45652eb21781"
               data-component="body" hidden>
    <br>
<p>Name of country.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-v1-group"
               value="This is a group"
               data-component="body" hidden>
    <br>
<p>The state of group.</p>
        </p>
        </form>

            <h2 id="group-GETapi-v1-group--uuid-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-group--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/group/591ce247-a55e-4959-808a-24511f87337b" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/group/591ce247-a55e-4959-808a-24511f87337b"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-group--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Group found successfully&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;591ce247-a55e-4959-808a-24511f87337b&quot;,
        &quot;slug&quot;: &quot;greta-rau&quot;,
        &quot;name&quot;: &quot;Greta Rau&quot;,
        &quot;description&quot;: &quot;Ipsum explicabo deleniti ea id nobis. Asperiores culpa nobis corrupti consequatur voluptates quis sapiente. Similique dolorem quam voluptas.&quot;,
        &quot;campaign_name&quot;: &quot;Mr. Grady Johnston Jr.&quot;,
        &quot;campaign_uuid&quot;: &quot;3ab774c3-10e1-4b0d-8832-26d6e17d8c41&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-group--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-group--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-group--uuid-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-group--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-group--uuid-"></code></pre>
</span>
<form id="form-GETapi-v1-group--uuid-" data-method="GET"
      data-path="api/v1/group/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-group--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-group--uuid-"
                    onclick="tryItOut('GETapi-v1-group--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-group--uuid-"
                    onclick="cancelTryOut('GETapi-v1-group--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-group--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/group/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="GETapi-v1-group--uuid-"
               value="591ce247-a55e-4959-808a-24511f87337b"
               data-component="url" hidden>
    <br>
<p>The Uuid of the group.</p>
            </p>
                    </form>

            <h2 id="group-PUTapi-v1-group--uuid-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-group--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:9000/api/v1/group/a96e16b7-b3ab-4100-a699-8a3715d4c050" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Group 1\",
    \"campaign_uuid\": \"2a1a5fad-d642-4fed-a0be-c5302e6bfc09\",
    \"description\": \"This is a group\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/group/a96e16b7-b3ab-4100-a699-8a3715d4c050"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Group 1",
    "campaign_uuid": "2a1a5fad-d642-4fed-a0be-c5302e6bfc09",
    "description": "This is a group"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-group--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Group updated&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;a96e16b7-b3ab-4100-a699-8a3715d4c050&quot;,
        &quot;slug&quot;: &quot;linnie-hodkiewicz&quot;,
        &quot;name&quot;: &quot;Linnie Hodkiewicz&quot;,
        &quot;description&quot;: &quot;Voluptate rem recusandae error esse. Totam minus in amet accusamus atque quidem expedita. Culpa asperiores reiciendis inventore eius et ab.&quot;,
        &quot;campaign_name&quot;: &quot;Emmalee Balistreri&quot;,
        &quot;campaign_uuid&quot;: &quot;2a1a5fad-d642-4fed-a0be-c5302e6bfc09&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-group--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-group--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-group--uuid-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-group--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-group--uuid-"></code></pre>
</span>
<form id="form-PUTapi-v1-group--uuid-" data-method="PUT"
      data-path="api/v1/group/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-group--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-group--uuid-"
                    onclick="tryItOut('PUTapi-v1-group--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-group--uuid-"
                    onclick="cancelTryOut('PUTapi-v1-group--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-group--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/group/{uuid}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/group/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="PUTapi-v1-group--uuid-"
               value="a96e16b7-b3ab-4100-a699-8a3715d4c050"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Group.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-v1-group--uuid-"
               value="Group 1"
               data-component="body" hidden>
    <br>
<p>The name of group.</p>
        </p>
                <p>
            <b><code>campaign_uuid</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="campaign_uuid"
               data-endpoint="PUTapi-v1-group--uuid-"
               value="2a1a5fad-d642-4fed-a0be-c5302e6bfc09"
               data-component="body" hidden>
    <br>
<p>Name of country.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-v1-group--uuid-"
               value="This is a group"
               data-component="body" hidden>
    <br>
<p>The state of group.</p>
        </p>
        </form>

            <h2 id="group-DELETEapi-v1-group--uuid-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-group--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:9000/api/v1/group/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/group/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-group--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Group deleted&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-group--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-group--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-group--uuid-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-group--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-group--uuid-"></code></pre>
</span>
<form id="form-DELETEapi-v1-group--uuid-" data-method="DELETE"
      data-path="api/v1/group/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-group--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-group--uuid-"
                    onclick="tryItOut('DELETEapi-v1-group--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-group--uuid-"
                    onclick="cancelTryOut('DELETEapi-v1-group--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-group--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/group/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="DELETEapi-v1-group--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The uuid of the group.</p>
            </p>
                    </form>

        <h1 id="offer">Offer</h1>

    

            <h2 id="offer-GETapi-v1-offer">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-offer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/offer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/offer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-offer">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;List of Offers&quot;,
    &quot;data&quot;: [
        {
            &quot;uuid&quot;: &quot;f0bbecad-8a32-429d-b5c7-11e3000ceb2f&quot;,
            &quot;discount_percentage&quot;: 58.84,
            &quot;campaign_uuid&quot;: &quot;082bea98-ca9a-4524-aecb-f862906f1290&quot;,
            &quot;products&quot;: []
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-offer" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-offer"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-offer"></code></pre>
</span>
<span id="execution-error-GETapi-v1-offer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-offer"></code></pre>
</span>
<form id="form-GETapi-v1-offer" data-method="GET"
      data-path="api/v1/offer"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-offer', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-offer"
                    onclick="tryItOut('GETapi-v1-offer');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-offer"
                    onclick="cancelTryOut('GETapi-v1-offer');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-offer" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/offer</code></b>
        </p>
                    </form>

            <h2 id="offer-POSTapi-v1-offer">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-offer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:9000/api/v1/offer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"discount_percentage\": 0,
    \"campaign_uuid\": \"f372282d-799c-4930-8dad-b2c3ee28679b\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/offer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "discount_percentage": 0,
    "campaign_uuid": "f372282d-799c-4930-8dad-b2c3ee28679b"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-offer">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;New Offer created&quot;,
    &quot;data&quot;: {
        &quot;discount_percentage&quot;: &quot;10&quot;,
        &quot;uuid&quot;: &quot;afb26055-bcd5-4eb3-9abd-1e97ef9f4563&quot;,
        &quot;campaign_uuid&quot;: &quot;f372282d-799c-4930-8dad-b2c3ee28679b&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-offer" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-offer"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-offer"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-offer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-offer"></code></pre>
</span>
<form id="form-POSTapi-v1-offer" data-method="POST"
      data-path="api/v1/offer"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-offer', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-offer"
                    onclick="tryItOut('POSTapi-v1-offer');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-offer"
                    onclick="cancelTryOut('POSTapi-v1-offer');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-offer" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/offer</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>discount_percentage</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="discount_percentage"
               data-endpoint="POSTapi-v1-offer"
               value="0"
               data-component="body" hidden>
    <br>
<p>The name of offer.</p>
        </p>
                <p>
            <b><code>campaign_uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="campaign_uuid"
               data-endpoint="POSTapi-v1-offer"
               value="f372282d-799c-4930-8dad-b2c3ee28679b"
               data-component="body" hidden>
    <br>
<p>The state of offer.</p>
        </p>
        </form>

            <h2 id="offer-GETapi-v1-offer--uuid-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-offer--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/offer/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/offer/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-offer--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;City found successfully&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;a9d2b989-6aa3-40d4-acf3-a4ba29f867c4&quot;,
        &quot;slug&quot;: &quot;araras&quot;,
        &quot;name&quot;: &quot;Araras&quot;,
        &quot;country&quot;: &quot;Brazil&quot;,
        &quot;state&quot;: &quot;SP&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-offer--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-offer--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-offer--uuid-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-offer--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-offer--uuid-"></code></pre>
</span>
<form id="form-GETapi-v1-offer--uuid-" data-method="GET"
      data-path="api/v1/offer/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-offer--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-offer--uuid-"
                    onclick="tryItOut('GETapi-v1-offer--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-offer--uuid-"
                    onclick="cancelTryOut('GETapi-v1-offer--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-offer--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/offer/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="GETapi-v1-offer--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The Uuid of the City.</p>
            </p>
                    </form>

            <h2 id="offer-PUTapi-v1-offer--uuid-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-offer--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:9000/api/v1/offer/22264db6-4245-4308-a870-45ff691b02be" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"discount_percentage\": 322182989.3176,
    \"campaign_uuid\": \"139a22bc-8149-4a09-bd5a-aadc04d8b4f4\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/offer/22264db6-4245-4308-a870-45ff691b02be"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "discount_percentage": 322182989.3176,
    "campaign_uuid": "139a22bc-8149-4a09-bd5a-aadc04d8b4f4"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-offer--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Offer updated&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;22264db6-4245-4308-a870-45ff691b02be&quot;,
        &quot;discount_percentage&quot;: 10,
        &quot;campaign_uuid&quot;: &quot;139a22bc-8149-4a09-bd5a-aadc04d8b4f4&quot;,
        &quot;products&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-offer--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-offer--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-offer--uuid-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-offer--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-offer--uuid-"></code></pre>
</span>
<form id="form-PUTapi-v1-offer--uuid-" data-method="PUT"
      data-path="api/v1/offer/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-offer--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-offer--uuid-"
                    onclick="tryItOut('PUTapi-v1-offer--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-offer--uuid-"
                    onclick="cancelTryOut('PUTapi-v1-offer--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-offer--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/offer/{uuid}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/offer/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="PUTapi-v1-offer--uuid-"
               value="22264db6-4245-4308-a870-45ff691b02be"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Offer.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>discount_percentage</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="discount_percentage"
               data-endpoint="PUTapi-v1-offer--uuid-"
               value="322182989.3176"
               data-component="body" hidden>
    <br>
<p>The name of offer.</p>
        </p>
                <p>
            <b><code>campaign_uuid</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="campaign_uuid"
               data-endpoint="PUTapi-v1-offer--uuid-"
               value="139a22bc-8149-4a09-bd5a-aadc04d8b4f4"
               data-component="body" hidden>
    <br>
<p>The state of offer.</p>
        </p>
        </form>

            <h2 id="offer-DELETEapi-v1-offer--uuid-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-offer--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:9000/api/v1/offer/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/offer/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-offer--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Offer deleted&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-offer--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-offer--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-offer--uuid-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-offer--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-offer--uuid-"></code></pre>
</span>
<form id="form-DELETEapi-v1-offer--uuid-" data-method="DELETE"
      data-path="api/v1/offer/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-offer--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-offer--uuid-"
                    onclick="tryItOut('DELETEapi-v1-offer--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-offer--uuid-"
                    onclick="cancelTryOut('DELETEapi-v1-offer--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-offer--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/offer/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="DELETEapi-v1-offer--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Offer.</p>
            </p>
                    </form>

            <h2 id="offer-POSTapi-v1-offer--uuid--products">Link a product to an offer.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-offer--uuid--products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:9000/api/v1/offer/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"products\": [
        \"perferendis\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/offer/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "products": [
        "perferendis"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-offer--uuid--products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products linked to the offer successfully&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-offer--uuid--products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-offer--uuid--products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-offer--uuid--products"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-offer--uuid--products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-offer--uuid--products"></code></pre>
</span>
<form id="form-POSTapi-v1-offer--uuid--products" data-method="POST"
      data-path="api/v1/offer/{uuid}/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-offer--uuid--products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-offer--uuid--products"
                    onclick="tryItOut('POSTapi-v1-offer--uuid--products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-offer--uuid--products"
                    onclick="cancelTryOut('POSTapi-v1-offer--uuid--products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-offer--uuid--products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/offer/{uuid}/products</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="POSTapi-v1-offer--uuid--products"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Offer.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>products</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
                <input type="text"
               name="products[0]"
               data-endpoint="POSTapi-v1-offer--uuid--products"
               data-component="body" hidden>
        <input type="text"
               name="products[1]"
               data-endpoint="POSTapi-v1-offer--uuid--products"
               data-component="body" hidden>
    <br>
<p>The state of offer.</p>
        </p>
        </form>

        <h1 id="product">Product</h1>

    

            <h2 id="product-GETapi-v1-product">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-product">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/product" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/product"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-product">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;List of Products&quot;,
    &quot;data&quot;: [
        {
            &quot;uuid&quot;: &quot;4664f01c-63cf-4aa7-a2b6-e91e98a689eb&quot;,
            &quot;slug&quot;: &quot;genesis-gutkowski&quot;,
            &quot;name&quot;: &quot;Genesis Gutkowski&quot;,
            &quot;price&quot;: 41.98,
            &quot;description&quot;: &quot;Rerum quis molestiae sed deleniti aut dolorem. Sint eos dignissimos facilis quo. Eos dolores excepturi sint pariatur qui itaque eum numquam. Quas eos consequatur a qui placeat.&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-product" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-product"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-product"></code></pre>
</span>
<span id="execution-error-GETapi-v1-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-product"></code></pre>
</span>
<form id="form-GETapi-v1-product" data-method="GET"
      data-path="api/v1/product"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-product', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-product"
                    onclick="tryItOut('GETapi-v1-product');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-product"
                    onclick="cancelTryOut('GETapi-v1-product');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-product" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/product</code></b>
        </p>
                    </form>

            <h2 id="product-POSTapi-v1-product">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-product">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:9000/api/v1/product" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Product 1\",
    \"description\": \"Description 1.\",
    \"price\": \"5.89\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/product"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Product 1",
    "description": "Description 1.",
    "price": "5.89"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-product">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;product.store.success&quot;,
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Product 1&quot;,
        &quot;description&quot;: &quot;Description 1&quot;,
        &quot;price&quot;: &quot;100&quot;,
        &quot;uuid&quot;: &quot;cabae00a-c42d-4e08-8274-9d2c782cccca&quot;,
        &quot;slug&quot;: &quot;product-1&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-product" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-product"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-product"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-product"></code></pre>
</span>
<form id="form-POSTapi-v1-product" data-method="POST"
      data-path="api/v1/product"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-product', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-product"
                    onclick="tryItOut('POSTapi-v1-product');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-product"
                    onclick="cancelTryOut('POSTapi-v1-product');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-product" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/product</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-product"
               value="Product 1"
               data-component="body" hidden>
    <br>
<p>string The name of product.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-v1-product"
               value="Description 1."
               data-component="body" hidden>
    <br>
<p>The state of product.</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-v1-product"
               value="5.89"
               data-component="body" hidden>
    <br>
<p>string price of product.</p>
        </p>
        </form>

            <h2 id="product-GETapi-v1-product--uuid-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-product--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:9000/api/v1/product/d8f21df7-90bd-40d6-ac92-cbc1fd7d5cf0" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/product/d8f21df7-90bd-40d6-ac92-cbc1fd7d5cf0"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-product--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Product found successfully&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;d8f21df7-90bd-40d6-ac92-cbc1fd7d5cf0&quot;,
        &quot;slug&quot;: &quot;reanna-olson&quot;,
        &quot;name&quot;: &quot;Reanna Olson&quot;,
        &quot;price&quot;: 38.68,
        &quot;description&quot;: &quot;Provident est sit nihil animi est beatae minima. Ut odit laudantium et perferendis dicta. Consequuntur qui reprehenderit velit. Unde rerum commodi pariatur est exercitationem.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-product--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-product--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-product--uuid-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-product--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-product--uuid-"></code></pre>
</span>
<form id="form-GETapi-v1-product--uuid-" data-method="GET"
      data-path="api/v1/product/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-product--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-product--uuid-"
                    onclick="tryItOut('GETapi-v1-product--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-product--uuid-"
                    onclick="cancelTryOut('GETapi-v1-product--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-product--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/product/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="GETapi-v1-product--uuid-"
               value="d8f21df7-90bd-40d6-ac92-cbc1fd7d5cf0"
               data-component="url" hidden>
    <br>
<p>The Uuid of the Product.</p>
            </p>
                    </form>

            <h2 id="product-PUTapi-v1-product--uuid-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-product--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:9000/api/v1/product/209207ef-fc7e-4d44-b5d8-4574a6934fb9" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Product updated\",
    \"description\": \"Description 1.\",
    \"price\": \"44.76\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/product/209207ef-fc7e-4d44-b5d8-4574a6934fb9"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Product updated",
    "description": "Description 1.",
    "price": "44.76"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-product--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Product updated&quot;,
    &quot;data&quot;: {
        &quot;uuid&quot;: &quot;209207ef-fc7e-4d44-b5d8-4574a6934fb9&quot;,
        &quot;slug&quot;: &quot;product-updated&quot;,
        &quot;name&quot;: &quot;Product updated&quot;,
        &quot;price&quot;: 44.76,
        &quot;description&quot;: &quot;Unde et in sint sed. Est dolores suscipit quasi laborum itaque quis. Aut distinctio sapiente illo et similique unde.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-product--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-product--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-product--uuid-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-product--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-product--uuid-"></code></pre>
</span>
<form id="form-PUTapi-v1-product--uuid-" data-method="PUT"
      data-path="api/v1/product/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-product--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-product--uuid-"
                    onclick="tryItOut('PUTapi-v1-product--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-product--uuid-"
                    onclick="cancelTryOut('PUTapi-v1-product--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-product--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/product/{uuid}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/product/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="PUTapi-v1-product--uuid-"
               value="209207ef-fc7e-4d44-b5d8-4574a6934fb9"
               data-component="url" hidden>
    <br>
<p>The Uuid of the product.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-v1-product--uuid-"
               value="Product updated"
               data-component="body" hidden>
    <br>
<p>The name of product.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-v1-product--uuid-"
               value="Description 1."
               data-component="body" hidden>
    <br>
<p>The state of product.</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="price"
               data-endpoint="PUTapi-v1-product--uuid-"
               value="44.76"
               data-component="body" hidden>
    <br>
<p>price of product.</p>
        </p>
        </form>

            <h2 id="product-DELETEapi-v1-product--uuid-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-product--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:9000/api/v1/product/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:9000/api/v1/product/a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-product--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Product deleted&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-product--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-product--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-product--uuid-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-product--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-product--uuid-"></code></pre>
</span>
<form id="form-DELETEapi-v1-product--uuid-" data-method="DELETE"
      data-path="api/v1/product/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-product--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-product--uuid-"
                    onclick="tryItOut('DELETEapi-v1-product--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-product--uuid-"
                    onclick="cancelTryOut('DELETEapi-v1-product--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-product--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/product/{uuid}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="DELETEapi-v1-product--uuid-"
               value="a9d2b989-6aa3-40d4-acf3-a4ba29f867c4"
               data-component="url" hidden>
    <br>
<p>The uuid of the product.</p>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
