<?php

/* @Chat/Default/index.html.twig */
class __TwigTemplate_16154df981102b42a4c596e5762507ac066ce78afd33dd0aa2de27d623661e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Chat/base.html.twig", "@Chat/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Chat/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c0ec85e8bfdc776400cda8fa4e456cfc29110b399bf71eac6998a588bb43d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0ec85e8bfdc776400cda8fa4e456cfc29110b399bf71eac6998a588bb43d3f->enter($__internal_5c0ec85e8bfdc776400cda8fa4e456cfc29110b399bf71eac6998a588bb43d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Chat/Default/index.html.twig"));

        $__internal_f1f46e1caa92c053a78fba5a12d96f563e8c9f4d6dda09c53c3c402928a38438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f46e1caa92c053a78fba5a12d96f563e8c9f4d6dda09c53c3c402928a38438->enter($__internal_f1f46e1caa92c053a78fba5a12d96f563e8c9f4d6dda09c53c3c402928a38438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Chat/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c0ec85e8bfdc776400cda8fa4e456cfc29110b399bf71eac6998a588bb43d3f->leave($__internal_5c0ec85e8bfdc776400cda8fa4e456cfc29110b399bf71eac6998a588bb43d3f_prof);

        
        $__internal_f1f46e1caa92c053a78fba5a12d96f563e8c9f4d6dda09c53c3c402928a38438->leave($__internal_f1f46e1caa92c053a78fba5a12d96f563e8c9f4d6dda09c53c3c402928a38438_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c885faaaf2bc72cf0088d251fa9aa3419523b779e8925f684043247815da0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c885faaaf2bc72cf0088d251fa9aa3419523b779e8925f684043247815da0f0->enter($__internal_3c885faaaf2bc72cf0088d251fa9aa3419523b779e8925f684043247815da0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5a6dbab8de38e6c0df21b81ffd9a43816ed4f0f1bf82e9e4214a798e0d3c5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a6dbab8de38e6c0df21b81ffd9a43816ed4f0f1bf82e9e4214a798e0d3c5be->enter($__internal_f5a6dbab8de38e6c0df21b81ffd9a43816ed4f0f1bf82e9e4214a798e0d3c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row margeTop\">
        <div class=\"col s12 center-align\">
            <h1>Présentez-vous pour accéder au chat :)</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s8 offset-s2\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form');
        echo "
        </div>
    </div>

";
        
        $__internal_f5a6dbab8de38e6c0df21b81ffd9a43816ed4f0f1bf82e9e4214a798e0d3c5be->leave($__internal_f5a6dbab8de38e6c0df21b81ffd9a43816ed4f0f1bf82e9e4214a798e0d3c5be_prof);

        
        $__internal_3c885faaaf2bc72cf0088d251fa9aa3419523b779e8925f684043247815da0f0->leave($__internal_3c885faaaf2bc72cf0088d251fa9aa3419523b779e8925f684043247815da0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Chat/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Chat/base.html.twig' %}

{% block body %}

    <div class=\"row margeTop\">
        <div class=\"col s12 center-align\">
            <h1>Présentez-vous pour accéder au chat :)</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s8 offset-s2\">
            {{ form(form) }}
        </div>
    </div>

{% endblock %}
", "@Chat/Default/index.html.twig", "/home/wilder/git_repositories/symfony/lyon-php-ORF-hackathon2/src/ChatBundle/Resources/views/Default/index.html.twig");
    }
}
