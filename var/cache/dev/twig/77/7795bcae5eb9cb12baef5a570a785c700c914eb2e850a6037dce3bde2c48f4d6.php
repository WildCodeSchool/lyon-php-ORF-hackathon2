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
        $__internal_5c549ef4b245569c12e79fb10016b7980cffa275ac919fa73842769348d1a753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c549ef4b245569c12e79fb10016b7980cffa275ac919fa73842769348d1a753->enter($__internal_5c549ef4b245569c12e79fb10016b7980cffa275ac919fa73842769348d1a753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d0596443fb11aad367db99702893889fe489f3d809044ee337a749b0306f7698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0596443fb11aad367db99702893889fe489f3d809044ee337a749b0306f7698->enter($__internal_d0596443fb11aad367db99702893889fe489f3d809044ee337a749b0306f7698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c549ef4b245569c12e79fb10016b7980cffa275ac919fa73842769348d1a753->leave($__internal_5c549ef4b245569c12e79fb10016b7980cffa275ac919fa73842769348d1a753_prof);

        
        $__internal_d0596443fb11aad367db99702893889fe489f3d809044ee337a749b0306f7698->leave($__internal_d0596443fb11aad367db99702893889fe489f3d809044ee337a749b0306f7698_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e5fcbd41181cabba03988e234be6b0bfce03a0bd9750600de09cf773875d237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5fcbd41181cabba03988e234be6b0bfce03a0bd9750600de09cf773875d237->enter($__internal_4e5fcbd41181cabba03988e234be6b0bfce03a0bd9750600de09cf773875d237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c66ae2ab4be3ff6c28f24a474eadd9bd3b5bf62a65fede523d27d4f312e8b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c66ae2ab4be3ff6c28f24a474eadd9bd3b5bf62a65fede523d27d4f312e8b58->enter($__internal_2c66ae2ab4be3ff6c28f24a474eadd9bd3b5bf62a65fede523d27d4f312e8b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c66ae2ab4be3ff6c28f24a474eadd9bd3b5bf62a65fede523d27d4f312e8b58->leave($__internal_2c66ae2ab4be3ff6c28f24a474eadd9bd3b5bf62a65fede523d27d4f312e8b58_prof);

        
        $__internal_4e5fcbd41181cabba03988e234be6b0bfce03a0bd9750600de09cf773875d237->leave($__internal_4e5fcbd41181cabba03988e234be6b0bfce03a0bd9750600de09cf773875d237_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_074e7cddae165648eb872f79b59c87654267361f0c1ff3acca86cf6926dff228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074e7cddae165648eb872f79b59c87654267361f0c1ff3acca86cf6926dff228->enter($__internal_074e7cddae165648eb872f79b59c87654267361f0c1ff3acca86cf6926dff228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37693f92ad065531a07a72abbb3238e2d41abfc32b80d5567368e11dba091dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37693f92ad065531a07a72abbb3238e2d41abfc32b80d5567368e11dba091dca->enter($__internal_37693f92ad065531a07a72abbb3238e2d41abfc32b80d5567368e11dba091dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37693f92ad065531a07a72abbb3238e2d41abfc32b80d5567368e11dba091dca->leave($__internal_37693f92ad065531a07a72abbb3238e2d41abfc32b80d5567368e11dba091dca_prof);

        
        $__internal_074e7cddae165648eb872f79b59c87654267361f0c1ff3acca86cf6926dff228->leave($__internal_074e7cddae165648eb872f79b59c87654267361f0c1ff3acca86cf6926dff228_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9271de5fddcfb8b22ed8e0304a94479f2603537b7818ad308b002117b38fa229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9271de5fddcfb8b22ed8e0304a94479f2603537b7818ad308b002117b38fa229->enter($__internal_9271de5fddcfb8b22ed8e0304a94479f2603537b7818ad308b002117b38fa229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c42543f252ca957d1798ab22b21a0cf50931e9692681d8012948a95aa63bf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c42543f252ca957d1798ab22b21a0cf50931e9692681d8012948a95aa63bf8c->enter($__internal_8c42543f252ca957d1798ab22b21a0cf50931e9692681d8012948a95aa63bf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8c42543f252ca957d1798ab22b21a0cf50931e9692681d8012948a95aa63bf8c->leave($__internal_8c42543f252ca957d1798ab22b21a0cf50931e9692681d8012948a95aa63bf8c_prof);

        
        $__internal_9271de5fddcfb8b22ed8e0304a94479f2603537b7818ad308b002117b38fa229->leave($__internal_9271de5fddcfb8b22ed8e0304a94479f2603537b7818ad308b002117b38fa229_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/wilder/git_repositories/symfony/lyon-php-ORF-hackathon2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
