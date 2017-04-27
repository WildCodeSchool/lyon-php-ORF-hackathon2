<?php

/* ChatBundle:Default:index.html.twig */
class __TwigTemplate_16154df981102b42a4c596e5762507ac066ce78afd33dd0aa2de27d623661e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Chat/base.html.twig", "ChatBundle:Default:index.html.twig", 1);
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
        $__internal_7e53a4ff230d3b67ee4303db5a2510ec1a0f9d72c0519365ec4f5d076747058a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e53a4ff230d3b67ee4303db5a2510ec1a0f9d72c0519365ec4f5d076747058a->enter($__internal_7e53a4ff230d3b67ee4303db5a2510ec1a0f9d72c0519365ec4f5d076747058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChatBundle:Default:index.html.twig"));

        $__internal_0d1aa5c0692b73e44cdc41702a572305897cb4ff707945811a9dca1d3df0a93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1aa5c0692b73e44cdc41702a572305897cb4ff707945811a9dca1d3df0a93c->enter($__internal_0d1aa5c0692b73e44cdc41702a572305897cb4ff707945811a9dca1d3df0a93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e53a4ff230d3b67ee4303db5a2510ec1a0f9d72c0519365ec4f5d076747058a->leave($__internal_7e53a4ff230d3b67ee4303db5a2510ec1a0f9d72c0519365ec4f5d076747058a_prof);

        
        $__internal_0d1aa5c0692b73e44cdc41702a572305897cb4ff707945811a9dca1d3df0a93c->leave($__internal_0d1aa5c0692b73e44cdc41702a572305897cb4ff707945811a9dca1d3df0a93c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66dac03c3f0978e3edf52e470d8b55e7b41951421c0d0441119f85e672f71665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66dac03c3f0978e3edf52e470d8b55e7b41951421c0d0441119f85e672f71665->enter($__internal_66dac03c3f0978e3edf52e470d8b55e7b41951421c0d0441119f85e672f71665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa7db1217112ff4d739a2497fb18c9c3da89eff3494f17c429e7cd1e230be184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7db1217112ff4d739a2497fb18c9c3da89eff3494f17c429e7cd1e230be184->enter($__internal_aa7db1217112ff4d739a2497fb18c9c3da89eff3494f17c429e7cd1e230be184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\"><h2>Welcome to the MiniChat</h2></div>

            <div class=\"col s3\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>

    </div>
</section>
";
        
        $__internal_aa7db1217112ff4d739a2497fb18c9c3da89eff3494f17c429e7cd1e230be184->leave($__internal_aa7db1217112ff4d739a2497fb18c9c3da89eff3494f17c429e7cd1e230be184_prof);

        
        $__internal_66dac03c3f0978e3edf52e470d8b55e7b41951421c0d0441119f85e672f71665->leave($__internal_66dac03c3f0978e3edf52e470d8b55e7b41951421c0d0441119f85e672f71665_prof);

    }

    public function getTemplateName()
    {
        return "ChatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Chat/base.html.twig' %}

{% block body %}

<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\"><h2>Welcome to the MiniChat</h2></div>

            <div class=\"col s3\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>

    </div>
</section>
{% endblock %}
", "ChatBundle:Default:index.html.twig", "/home/wilder/git_repositories/symfony/lyon-php-ORF-hackathon2/src/ChatBundle/Resources/views/Default/index.html.twig");
    }
}
