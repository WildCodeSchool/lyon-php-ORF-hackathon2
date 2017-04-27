<?php

/* ChatBundle:Default:index.html.twig */
class __TwigTemplate_16154df981102b42a4c596e5762507ac066ce78afd33dd0aa2de27d623661e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ChatBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2466b8a3ab7335f4b85676f2fb7f530438983c807270c82ebec22d968a3acdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2466b8a3ab7335f4b85676f2fb7f530438983c807270c82ebec22d968a3acdb1->enter($__internal_2466b8a3ab7335f4b85676f2fb7f530438983c807270c82ebec22d968a3acdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChatBundle:Default:index.html.twig"));

        $__internal_8b7f57174564e86dfeb268dd7f32f3a792f5c6f844c0a31424812247275700fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7f57174564e86dfeb268dd7f32f3a792f5c6f844c0a31424812247275700fb->enter($__internal_8b7f57174564e86dfeb268dd7f32f3a792f5c6f844c0a31424812247275700fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2466b8a3ab7335f4b85676f2fb7f530438983c807270c82ebec22d968a3acdb1->leave($__internal_2466b8a3ab7335f4b85676f2fb7f530438983c807270c82ebec22d968a3acdb1_prof);

        
        $__internal_8b7f57174564e86dfeb268dd7f32f3a792f5c6f844c0a31424812247275700fb->leave($__internal_8b7f57174564e86dfeb268dd7f32f3a792f5c6f844c0a31424812247275700fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6df642c62ce3e1c2f49d500dc8c95d961d7bf00b34cf71affc8a05070e16cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6df642c62ce3e1c2f49d500dc8c95d961d7bf00b34cf71affc8a05070e16cc8->enter($__internal_d6df642c62ce3e1c2f49d500dc8c95d961d7bf00b34cf71affc8a05070e16cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f65a2bc14fdad3c981ba9ad84a6b417beeeda811ab3da8c1c8c1f3f5854f76f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65a2bc14fdad3c981ba9ad84a6b417beeeda811ab3da8c1c8c1f3f5854f76f1->enter($__internal_f65a2bc14fdad3c981ba9ad84a6b417beeeda811ab3da8c1c8c1f3f5854f76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
Hello World!

";
        
        $__internal_f65a2bc14fdad3c981ba9ad84a6b417beeeda811ab3da8c1c8c1f3f5854f76f1->leave($__internal_f65a2bc14fdad3c981ba9ad84a6b417beeeda811ab3da8c1c8c1f3f5854f76f1_prof);

        
        $__internal_d6df642c62ce3e1c2f49d500dc8c95d961d7bf00b34cf71affc8a05070e16cc8->leave($__internal_d6df642c62ce3e1c2f49d500dc8c95d961d7bf00b34cf71affc8a05070e16cc8_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

Hello World!

{% endblock %}
", "ChatBundle:Default:index.html.twig", "/home/topikana/PhpstormProjects/lyon-php-ORF-hackathon2/src/ChatBundle/Resources/views/Default/index.html.twig");
    }
}
