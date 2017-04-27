<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_428213dcfd733a72b105c3c54cea292afbd307fa0fd6b977feaed3d32b109821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428213dcfd733a72b105c3c54cea292afbd307fa0fd6b977feaed3d32b109821->enter($__internal_428213dcfd733a72b105c3c54cea292afbd307fa0fd6b977feaed3d32b109821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_92ee600d9fa56f77b1109c1743d536261481fc33c0d1a461e8c2867a1f0a038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ee600d9fa56f77b1109c1743d536261481fc33c0d1a461e8c2867a1f0a038c->enter($__internal_92ee600d9fa56f77b1109c1743d536261481fc33c0d1a461e8c2867a1f0a038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428213dcfd733a72b105c3c54cea292afbd307fa0fd6b977feaed3d32b109821->leave($__internal_428213dcfd733a72b105c3c54cea292afbd307fa0fd6b977feaed3d32b109821_prof);

        
        $__internal_92ee600d9fa56f77b1109c1743d536261481fc33c0d1a461e8c2867a1f0a038c->leave($__internal_92ee600d9fa56f77b1109c1743d536261481fc33c0d1a461e8c2867a1f0a038c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e916a577ce31fe44bd4ba526e7fc9b9bb061ce33eaf14ac60ee99593aab94ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e916a577ce31fe44bd4ba526e7fc9b9bb061ce33eaf14ac60ee99593aab94ae->enter($__internal_5e916a577ce31fe44bd4ba526e7fc9b9bb061ce33eaf14ac60ee99593aab94ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5fb28cb19769d79f232210a0a8cdef26d15e01eb8312ba100e2136c419e3e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fb28cb19769d79f232210a0a8cdef26d15e01eb8312ba100e2136c419e3e15->enter($__internal_d5fb28cb19769d79f232210a0a8cdef26d15e01eb8312ba100e2136c419e3e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5fb28cb19769d79f232210a0a8cdef26d15e01eb8312ba100e2136c419e3e15->leave($__internal_d5fb28cb19769d79f232210a0a8cdef26d15e01eb8312ba100e2136c419e3e15_prof);

        
        $__internal_5e916a577ce31fe44bd4ba526e7fc9b9bb061ce33eaf14ac60ee99593aab94ae->leave($__internal_5e916a577ce31fe44bd4ba526e7fc9b9bb061ce33eaf14ac60ee99593aab94ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7be7e61192f77f61952cb6d11f31d03614b8b1a91566b95ac3aa1893e1ac9dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be7e61192f77f61952cb6d11f31d03614b8b1a91566b95ac3aa1893e1ac9dc4->enter($__internal_7be7e61192f77f61952cb6d11f31d03614b8b1a91566b95ac3aa1893e1ac9dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91ab6d4631c1a1920adae2389e767692f8ec8ffa2103fa4142b4bba7cb2943f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ab6d4631c1a1920adae2389e767692f8ec8ffa2103fa4142b4bba7cb2943f6->enter($__internal_91ab6d4631c1a1920adae2389e767692f8ec8ffa2103fa4142b4bba7cb2943f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91ab6d4631c1a1920adae2389e767692f8ec8ffa2103fa4142b4bba7cb2943f6->leave($__internal_91ab6d4631c1a1920adae2389e767692f8ec8ffa2103fa4142b4bba7cb2943f6_prof);

        
        $__internal_7be7e61192f77f61952cb6d11f31d03614b8b1a91566b95ac3aa1893e1ac9dc4->leave($__internal_7be7e61192f77f61952cb6d11f31d03614b8b1a91566b95ac3aa1893e1ac9dc4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fcf99712b682e0e5e46500d8afc904d60dcf3dd4af1366f78d61dd25304219f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcf99712b682e0e5e46500d8afc904d60dcf3dd4af1366f78d61dd25304219f->enter($__internal_8fcf99712b682e0e5e46500d8afc904d60dcf3dd4af1366f78d61dd25304219f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fcdb0ab41d7d9736629a205664908ecd5268c7f00999d401892dc788d4db4960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdb0ab41d7d9736629a205664908ecd5268c7f00999d401892dc788d4db4960->enter($__internal_fcdb0ab41d7d9736629a205664908ecd5268c7f00999d401892dc788d4db4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fcdb0ab41d7d9736629a205664908ecd5268c7f00999d401892dc788d4db4960->leave($__internal_fcdb0ab41d7d9736629a205664908ecd5268c7f00999d401892dc788d4db4960_prof);

        
        $__internal_8fcf99712b682e0e5e46500d8afc904d60dcf3dd4af1366f78d61dd25304219f->leave($__internal_8fcf99712b682e0e5e46500d8afc904d60dcf3dd4af1366f78d61dd25304219f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/topikana/PhpstormProjects/lyon-php-ORF-hackathon2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
