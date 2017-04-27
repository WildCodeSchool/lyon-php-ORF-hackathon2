<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a791c03aab398167362abfa87d48fcdddc0cbb63d36c023808e2b2b83c4fdeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a791c03aab398167362abfa87d48fcdddc0cbb63d36c023808e2b2b83c4fdeb->enter($__internal_0a791c03aab398167362abfa87d48fcdddc0cbb63d36c023808e2b2b83c4fdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_25a76db934c805f91ef481d61b0345db38bb23f4ae80ea31307da720dde2b035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a76db934c805f91ef481d61b0345db38bb23f4ae80ea31307da720dde2b035->enter($__internal_25a76db934c805f91ef481d61b0345db38bb23f4ae80ea31307da720dde2b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a791c03aab398167362abfa87d48fcdddc0cbb63d36c023808e2b2b83c4fdeb->leave($__internal_0a791c03aab398167362abfa87d48fcdddc0cbb63d36c023808e2b2b83c4fdeb_prof);

        
        $__internal_25a76db934c805f91ef481d61b0345db38bb23f4ae80ea31307da720dde2b035->leave($__internal_25a76db934c805f91ef481d61b0345db38bb23f4ae80ea31307da720dde2b035_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14377ef929f3974866d35b42234450da662f2320968936f0b39df8e211e61f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14377ef929f3974866d35b42234450da662f2320968936f0b39df8e211e61f11->enter($__internal_14377ef929f3974866d35b42234450da662f2320968936f0b39df8e211e61f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfcc0161718346b396b25f628b67f5c2f6fe6c874eacdffb6c6fb6da9bc37ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcc0161718346b396b25f628b67f5c2f6fe6c874eacdffb6c6fb6da9bc37ee0->enter($__internal_bfcc0161718346b396b25f628b67f5c2f6fe6c874eacdffb6c6fb6da9bc37ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfcc0161718346b396b25f628b67f5c2f6fe6c874eacdffb6c6fb6da9bc37ee0->leave($__internal_bfcc0161718346b396b25f628b67f5c2f6fe6c874eacdffb6c6fb6da9bc37ee0_prof);

        
        $__internal_14377ef929f3974866d35b42234450da662f2320968936f0b39df8e211e61f11->leave($__internal_14377ef929f3974866d35b42234450da662f2320968936f0b39df8e211e61f11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc948f07e4258a97a5ac529bd681e5a9e48a674782e28df8b3f7d18c6fa92452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc948f07e4258a97a5ac529bd681e5a9e48a674782e28df8b3f7d18c6fa92452->enter($__internal_fc948f07e4258a97a5ac529bd681e5a9e48a674782e28df8b3f7d18c6fa92452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a4f44fd59d515114c39c0716c0c3609de03d364841d3d2ff4579887b4276f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4f44fd59d515114c39c0716c0c3609de03d364841d3d2ff4579887b4276f11->enter($__internal_3a4f44fd59d515114c39c0716c0c3609de03d364841d3d2ff4579887b4276f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3a4f44fd59d515114c39c0716c0c3609de03d364841d3d2ff4579887b4276f11->leave($__internal_3a4f44fd59d515114c39c0716c0c3609de03d364841d3d2ff4579887b4276f11_prof);

        
        $__internal_fc948f07e4258a97a5ac529bd681e5a9e48a674782e28df8b3f7d18c6fa92452->leave($__internal_fc948f07e4258a97a5ac529bd681e5a9e48a674782e28df8b3f7d18c6fa92452_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be42df52753cc8d662878b00f9d50c90378b82ea827922e47f9a539f02786b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be42df52753cc8d662878b00f9d50c90378b82ea827922e47f9a539f02786b8e->enter($__internal_be42df52753cc8d662878b00f9d50c90378b82ea827922e47f9a539f02786b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f320fcf74e86424f59e8d049b42af731318a9fe6caa2f36b6fe484abfcd4beed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f320fcf74e86424f59e8d049b42af731318a9fe6caa2f36b6fe484abfcd4beed->enter($__internal_f320fcf74e86424f59e8d049b42af731318a9fe6caa2f36b6fe484abfcd4beed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f320fcf74e86424f59e8d049b42af731318a9fe6caa2f36b6fe484abfcd4beed->leave($__internal_f320fcf74e86424f59e8d049b42af731318a9fe6caa2f36b6fe484abfcd4beed_prof);

        
        $__internal_be42df52753cc8d662878b00f9d50c90378b82ea827922e47f9a539f02786b8e->leave($__internal_be42df52753cc8d662878b00f9d50c90378b82ea827922e47f9a539f02786b8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/wilder/git_repositories/symfony/lyon-php-ORF-hackathon2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
