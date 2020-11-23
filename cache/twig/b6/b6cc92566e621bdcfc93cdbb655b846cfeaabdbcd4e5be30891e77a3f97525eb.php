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

/* register.html.twig */
class __TwigTemplate_e8a247d7812e2a021e6a2a6ce5af2968c2ab7919ec45ac4b18c3b32a33a28f1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        $this->loadTemplate("register.html.twig", "register.html.twig", 1, "1256564945")->display(twig_array_merge($context, ["title" => "Grav Register Admin User", "classes" => "wide"]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/register.html.twig' with {title:'Grav Register Admin User', classes:'wide'} %}

    {% block instructions %}
    <div class=\"instructions\">
        {{ page.content|raw }}
    </div>
    {% endblock %}

    {% block form %}
        {% for field in form.fields %}
            {% if field.type %}
                {% set value = form.value(field.name) %}
                <div class=\"wrapper-{{ field.name }}\">
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}

        <div class=\"form-actions primary-accent\">

            <button type=\"reset\" class=\"button secondary\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CLEAR'|tu }}</button>
            <button type=\"submit\" class=\"button primary\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CREATE_USER'|tu }}</button>

        </div>

    {% endblock %}

{% endembed %}
", "register.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\register.html.twig");
    }
}


/* register.html.twig */
class __TwigTemplate_e8a247d7812e2a021e6a2a6ce5af2968c2ab7919ec45ac4b18c3b32a33a28f1d___1256564945 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'instructions' => [$this, 'block_instructions'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent = $this->loadTemplate("partials/register.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_instructions($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructions"));

        // line 4
        echo "    <div class=\"instructions\">
        ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_form($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 11
            echo "            ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 12
                echo "                ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 13
                echo "                <div class=\"wrapper-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", []), "html", null, true);
                echo "\">
                    ";
                // line 14
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "register.html.twig", 14)->display($context);
                // line 15
                echo "                </div>
            ";
            }
            // line 17
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        <div class=\"form-actions primary-accent\">

            <button type=\"reset\" class=\"button secondary\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_CLEAR"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"button primary\"><i class=\"fa fa-sign-in\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_CREATE_USER"), "html", null, true);
        echo "</button>

        </div>

    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 22,  207 => 21,  202 => 18,  188 => 17,  184 => 15,  182 => 14,  177 => 13,  174 => 12,  171 => 11,  153 => 10,  147 => 9,  137 => 5,  134 => 4,  128 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/register.html.twig' with {title:'Grav Register Admin User', classes:'wide'} %}

    {% block instructions %}
    <div class=\"instructions\">
        {{ page.content|raw }}
    </div>
    {% endblock %}

    {% block form %}
        {% for field in form.fields %}
            {% if field.type %}
                {% set value = form.value(field.name) %}
                <div class=\"wrapper-{{ field.name }}\">
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}

        <div class=\"form-actions primary-accent\">

            <button type=\"reset\" class=\"button secondary\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CLEAR'|tu }}</button>
            <button type=\"submit\" class=\"button primary\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CREATE_USER'|tu }}</button>

        </div>

    {% endblock %}

{% endembed %}
", "register.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\register.html.twig");
    }
}
