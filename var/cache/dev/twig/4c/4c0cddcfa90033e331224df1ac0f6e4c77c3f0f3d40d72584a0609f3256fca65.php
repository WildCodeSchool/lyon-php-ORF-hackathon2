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
        $__internal_fea44fb9604ca9188b27c6c41a5eeeac2bf7c23e4fe3ab30074390a16f71cf6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea44fb9604ca9188b27c6c41a5eeeac2bf7c23e4fe3ab30074390a16f71cf6b->enter($__internal_fea44fb9604ca9188b27c6c41a5eeeac2bf7c23e4fe3ab30074390a16f71cf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2669d523b94c08a7c1116035ccc1bf540a798b327a76e432abb6ac2f50802ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2669d523b94c08a7c1116035ccc1bf540a798b327a76e432abb6ac2f50802ab9->enter($__internal_2669d523b94c08a7c1116035ccc1bf540a798b327a76e432abb6ac2f50802ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fea44fb9604ca9188b27c6c41a5eeeac2bf7c23e4fe3ab30074390a16f71cf6b->leave($__internal_fea44fb9604ca9188b27c6c41a5eeeac2bf7c23e4fe3ab30074390a16f71cf6b_prof);

        
        $__internal_2669d523b94c08a7c1116035ccc1bf540a798b327a76e432abb6ac2f50802ab9->leave($__internal_2669d523b94c08a7c1116035ccc1bf540a798b327a76e432abb6ac2f50802ab9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6be8caf2051fa4aef7ca1c52f0c4054b22ca6f4abb148e537c3938d79f737d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be8caf2051fa4aef7ca1c52f0c4054b22ca6f4abb148e537c3938d79f737d82->enter($__internal_6be8caf2051fa4aef7ca1c52f0c4054b22ca6f4abb148e537c3938d79f737d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9e3ef46d64791c9804bf1244085956c4b326bccce00a352d50756c770e890e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e3ef46d64791c9804bf1244085956c4b326bccce00a352d50756c770e890e8->enter($__internal_a9e3ef46d64791c9804bf1244085956c4b326bccce00a352d50756c770e890e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a9e3ef46d64791c9804bf1244085956c4b326bccce00a352d50756c770e890e8->leave($__internal_a9e3ef46d64791c9804bf1244085956c4b326bccce00a352d50756c770e890e8_prof);

        
        $__internal_6be8caf2051fa4aef7ca1c52f0c4054b22ca6f4abb148e537c3938d79f737d82->leave($__internal_6be8caf2051fa4aef7ca1c52f0c4054b22ca6f4abb148e537c3938d79f737d82_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_906abf3768ddee297c307d8ee5193bd611599b36e2669465791fd73585f6ac3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906abf3768ddee297c307d8ee5193bd611599b36e2669465791fd73585f6ac3d->enter($__internal_906abf3768ddee297c307d8ee5193bd611599b36e2669465791fd73585f6ac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b33d75a8a534543c73b113b3d3bfdbfda57b9be6bbc7f21e0cec01d3e1792165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33d75a8a534543c73b113b3d3bfdbfda57b9be6bbc7f21e0cec01d3e1792165->enter($__internal_b33d75a8a534543c73b113b3d3bfdbfda57b9be6bbc7f21e0cec01d3e1792165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b33d75a8a534543c73b113b3d3bfdbfda57b9be6bbc7f21e0cec01d3e1792165->leave($__internal_b33d75a8a534543c73b113b3d3bfdbfda57b9be6bbc7f21e0cec01d3e1792165_prof);

        
        $__internal_906abf3768ddee297c307d8ee5193bd611599b36e2669465791fd73585f6ac3d->leave($__internal_906abf3768ddee297c307d8ee5193bd611599b36e2669465791fd73585f6ac3d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_404cc6f9d43e50d7a6d6146d2f71d257c46025fe1642cbbfb20af18471293dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404cc6f9d43e50d7a6d6146d2f71d257c46025fe1642cbbfb20af18471293dca->enter($__internal_404cc6f9d43e50d7a6d6146d2f71d257c46025fe1642cbbfb20af18471293dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1933bb739cbfe0e4f1db7a903390bab5f95a225d04d7d4f224a073d3c9353a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1933bb739cbfe0e4f1db7a903390bab5f95a225d04d7d4f224a073d3c9353a08->enter($__internal_1933bb739cbfe0e4f1db7a903390bab5f95a225d04d7d4f224a073d3c9353a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1933bb739cbfe0e4f1db7a903390bab5f95a225d04d7d4f224a073d3c9353a08->leave($__internal_1933bb739cbfe0e4f1db7a903390bab5f95a225d04d7d4f224a073d3c9353a08_prof);

        
        $__internal_404cc6f9d43e50d7a6d6146d2f71d257c46025fe1642cbbfb20af18471293dca->leave($__internal_404cc6f9d43e50d7a6d6146d2f71d257c46025fe1642cbbfb20af18471293dca_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/topikana/PhpstormProjects/lyon-php-ORF-hackathon2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
