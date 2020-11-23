<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base-root.html.twig */
class __TwigTemplate_ed9447d412843b3c897f7943780822f8ade3742f3d9f4990f823caeff85e2f33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'noscript' => [$this, 'block_noscript'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/base-root.html.twig"));

        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", [], "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 30
            echo "
    ";
            // line 31
            $this->displayBlock('assets', $context, $blocks);
            // line 35
            echo "
    <noscript>
        <style>
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    </head>
    ";
            // line 45
            $this->displayBlock('body', $context, $blocks);
            // line 145
            echo "    </html>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, strip_tags(($context["title"] ?? null)), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 16
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 18
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 31
    public function block_assets_deferred($context, array $blocks = array())
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "assets"));

        // line 32
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "    <body class=\"ga-theme-17x ";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "size", []) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "body_classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 48
        if ( !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login"])) {
            // line 49
            echo "        ";
            $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 49)->display($context);
            // line 50
            echo "    ";
        } else {
            // line 51
            echo "
        ";
            // line 52
            $this->displayBlock('noscript', $context, $blocks);
            // line 55
            echo "
        ";
            // line 56
            $this->displayBlock('page', $context, $blocks);
            // line 137
            echo "
    ";
        }
        // line 139
        echo "
    ";
        // line 140
        $this->displayBlock('bottom', $context, $blocks);
        // line 143
        echo "    </body>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 52
    public function block_noscript($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "noscript"));

        // line 53
        echo "            ";
        $this->loadTemplate("partials/noscript.html.twig", "partials/base-root.html.twig", 53)->display($context);
        // line 54
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 56
    public function block_page($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 57
        echo "        <div class=\"remodal-bg\">

            ";
        // line 59
        $this->displayBlock('navigation', $context, $blocks);
        // line 62
        echo "
            <main id=\"admin-main\" >
                ";
        // line 64
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 64)->display($context);
        // line 65
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 66
        $this->displayBlock('titlebar', $context, $blocks);
        // line 67
        echo "                </div>

                ";
        // line 69
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 95
        echo "
                ";
        // line 96
        $this->displayBlock('modals', $context, $blocks);
        // line 132
        echo "
            </main>
            <div id='overlay'></div>
        </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 59
    public function block_navigation($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 60
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 60)->display($context);
        // line 61
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 66
    public function block_titlebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 69
    public function block_content_wrapper($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_wrapper"));

        // line 70
        echo "                <div data-simplebar class=\"content-wrapper\">
                    <div class=\"";
        // line 71
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 72
        $this->displayBlock('messages', $context, $blocks);
        // line 75
        echo "
                        ";
        // line 76
        $this->displayBlock('widgets', $context, $blocks);
        // line 77
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 78
        $this->displayBlock('content_top', $context, $blocks);
        // line 79
        echo "                            <div class=\"admin-block\">";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "</div>
                            ";
        // line 82
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "show_github_msg", [])) {
            // line 83
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 85
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 86
        echo "                        </div>
                        ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "                    </div>
                </div>
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 72
    public function block_messages($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 73
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 73)->display($context);
        // line 74
        echo "                        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 76
    public function block_widgets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 78
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 85
    public function block_content_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_bottom"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "                        <footer id=\"footer\">
                             ";
        // line 89
        $this->loadTemplate("partials/footer.html.twig", "partials/base-root.html.twig", 89)->display($context);
        // line 90
        echo "                        </footer>
                        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 96
    public function block_modals($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        // line 97
        echo "                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 140
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 141
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 141,  572 => 140,  560 => 127,  556 => 126,  549 => 122,  544 => 120,  535 => 114,  526 => 108,  517 => 102,  511 => 99,  507 => 97,  501 => 96,  493 => 90,  491 => 89,  488 => 88,  482 => 87,  471 => 85,  460 => 80,  449 => 78,  438 => 76,  431 => 74,  428 => 73,  422 => 72,  413 => 92,  411 => 87,  408 => 86,  405 => 85,  399 => 83,  397 => 82,  394 => 81,  392 => 80,  390 => 79,  388 => 78,  385 => 77,  383 => 76,  380 => 75,  378 => 72,  372 => 71,  369 => 70,  363 => 69,  352 => 66,  345 => 61,  342 => 60,  336 => 59,  325 => 132,  323 => 96,  320 => 95,  318 => 69,  314 => 67,  312 => 66,  309 => 65,  307 => 64,  303 => 62,  301 => 59,  297 => 57,  291 => 56,  284 => 54,  281 => 53,  275 => 52,  267 => 143,  265 => 140,  262 => 139,  258 => 137,  256 => 56,  253 => 55,  251 => 52,  248 => 51,  245 => 50,  242 => 49,  240 => 48,  230 => 46,  224 => 45,  214 => 33,  209 => 32,  203 => 31,  191 => 28,  188 => 27,  182 => 26,  175 => 23,  172 => 22,  166 => 21,  159 => 29,  156 => 26,  154 => 25,  151 => 24,  149 => 21,  143 => 19,  140 => 18,  136 => 16,  130 => 14,  127 => 13,  121 => 11,  115 => 9,  113 => 8,  100 => 7,  97 => 6,  91 => 5,  81 => 145,  79 => 45,  67 => 35,  65 => 31,  62 => 30,  60 => 5,  55 => 2,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if title %}{{ title|striptags }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
        {% endblock %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

    <noscript>
        <style>
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    </head>
    {% block body %}
    <body class=\"ga-theme-17x {{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }} {{ body_classes }}\">

    {% if not authorize(['admin.login']) %}
        {% include 'partials/messages.html.twig' %}
    {% else %}

        {% block noscript %}
            {% include 'partials/noscript.html.twig' %}
        {% endblock noscript %}

        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                {% block content_wrapper %}
                <div data-simplebar class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\" rel=\"noopener noreferrer\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             {% include 'partials/footer.html.twig' %}
                        </footer>
                        {% endblock %}
                    </div>
                </div>
                {% endblock %}

                {% block modals %}
                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|tu }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|tu }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
                        </div>
                    </form>
                </div>
                {% endblock %}

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}

    {% endif %}

    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\base-root.html.twig");
    }
}
