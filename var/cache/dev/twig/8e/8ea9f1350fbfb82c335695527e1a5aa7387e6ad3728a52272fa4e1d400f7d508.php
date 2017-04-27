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
        $__internal_be675564875fdae53b3b1f94e83bbd657aa713b29ab76ea53b6db2792c635fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be675564875fdae53b3b1f94e83bbd657aa713b29ab76ea53b6db2792c635fe4->enter($__internal_be675564875fdae53b3b1f94e83bbd657aa713b29ab76ea53b6db2792c635fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChatBundle:Default:index.html.twig"));

        $__internal_3bf4818366b651e1015dc284978b3c32dead310b1b553bcba9f09d0ad73ce172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf4818366b651e1015dc284978b3c32dead310b1b553bcba9f09d0ad73ce172->enter($__internal_3bf4818366b651e1015dc284978b3c32dead310b1b553bcba9f09d0ad73ce172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be675564875fdae53b3b1f94e83bbd657aa713b29ab76ea53b6db2792c635fe4->leave($__internal_be675564875fdae53b3b1f94e83bbd657aa713b29ab76ea53b6db2792c635fe4_prof);

        
        $__internal_3bf4818366b651e1015dc284978b3c32dead310b1b553bcba9f09d0ad73ce172->leave($__internal_3bf4818366b651e1015dc284978b3c32dead310b1b553bcba9f09d0ad73ce172_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e80e32d8ec6cdbddfa7e1da8432c499a31c54e8547c482e192c4ef025b653fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e80e32d8ec6cdbddfa7e1da8432c499a31c54e8547c482e192c4ef025b653fc->enter($__internal_3e80e32d8ec6cdbddfa7e1da8432c499a31c54e8547c482e192c4ef025b653fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46e40f6b8d10efe707daf6b14ac68dccffe5fb0b1daf165e4706027e1413e025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e40f6b8d10efe707daf6b14ac68dccffe5fb0b1daf165e4706027e1413e025->enter($__internal_46e40f6b8d10efe707daf6b14ac68dccffe5fb0b1daf165e4706027e1413e025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container home\">
        <div class=\"row\">
            <div><h2>Welcome to the MiniChat</h2></div>
                        <div>
                            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form');
        echo "

                        </div>
                    </div>
                </div>
";
        
        $__internal_46e40f6b8d10efe707daf6b14ac68dccffe5fb0b1daf165e4706027e1413e025->leave($__internal_46e40f6b8d10efe707daf6b14ac68dccffe5fb0b1daf165e4706027e1413e025_prof);

        
        $__internal_3e80e32d8ec6cdbddfa7e1da8432c499a31c54e8547c482e192c4ef025b653fc->leave($__internal_3e80e32d8ec6cdbddfa7e1da8432c499a31c54e8547c482e192c4ef025b653fc_prof);

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
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Chat/base.html.twig' %}

{% block body %}

    <div class=\"container home\">
        <div class=\"row\">
            <div><h2>Welcome to the MiniChat</h2></div>
                        <div>
                            {{ form(form) }}

                        </div>
                    </div>
                </div>
{% endblock %}
", "ChatBundle:Default:index.html.twig", "/home/wilder/git_repositories/symfony/lyon-php-ORF-hackathon2/src/ChatBundle/Resources/views/Default/index.html.twig");
    }
}
