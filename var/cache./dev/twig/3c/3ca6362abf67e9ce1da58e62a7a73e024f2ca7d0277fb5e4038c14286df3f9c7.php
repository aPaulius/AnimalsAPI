<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2950bea4225de28d1ece9a268b19848d17155a6cb7931f11adc0c7ac05bd6c76 extends Twig_Template
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
        $__internal_359c84aafd8e5d7b18bba6e523d37f5b2b571e67d63166f49cf4b881a718743c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359c84aafd8e5d7b18bba6e523d37f5b2b571e67d63166f49cf4b881a718743c->enter($__internal_359c84aafd8e5d7b18bba6e523d37f5b2b571e67d63166f49cf4b881a718743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_858efa34d87bc6ad6084766959542a6952d079ad6a0d243a6c461ad9842ada5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858efa34d87bc6ad6084766959542a6952d079ad6a0d243a6c461ad9842ada5c->enter($__internal_858efa34d87bc6ad6084766959542a6952d079ad6a0d243a6c461ad9842ada5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359c84aafd8e5d7b18bba6e523d37f5b2b571e67d63166f49cf4b881a718743c->leave($__internal_359c84aafd8e5d7b18bba6e523d37f5b2b571e67d63166f49cf4b881a718743c_prof);

        
        $__internal_858efa34d87bc6ad6084766959542a6952d079ad6a0d243a6c461ad9842ada5c->leave($__internal_858efa34d87bc6ad6084766959542a6952d079ad6a0d243a6c461ad9842ada5c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_522dc6345d2db3d1a6f8da6f9f3aa55c8a9f2b122f8a6c780a1972f467e5a3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522dc6345d2db3d1a6f8da6f9f3aa55c8a9f2b122f8a6c780a1972f467e5a3c6->enter($__internal_522dc6345d2db3d1a6f8da6f9f3aa55c8a9f2b122f8a6c780a1972f467e5a3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c30f3e9b0f3968d3bdbe7068671eebc96ca1766a9e02156e0fc4c428f8ac60ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30f3e9b0f3968d3bdbe7068671eebc96ca1766a9e02156e0fc4c428f8ac60ad->enter($__internal_c30f3e9b0f3968d3bdbe7068671eebc96ca1766a9e02156e0fc4c428f8ac60ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c30f3e9b0f3968d3bdbe7068671eebc96ca1766a9e02156e0fc4c428f8ac60ad->leave($__internal_c30f3e9b0f3968d3bdbe7068671eebc96ca1766a9e02156e0fc4c428f8ac60ad_prof);

        
        $__internal_522dc6345d2db3d1a6f8da6f9f3aa55c8a9f2b122f8a6c780a1972f467e5a3c6->leave($__internal_522dc6345d2db3d1a6f8da6f9f3aa55c8a9f2b122f8a6c780a1972f467e5a3c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b954aca9787650ade4bd1449a8ebdfc4fbb40487c7ccde8b2a6c6b7af26a3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b954aca9787650ade4bd1449a8ebdfc4fbb40487c7ccde8b2a6c6b7af26a3d6->enter($__internal_7b954aca9787650ade4bd1449a8ebdfc4fbb40487c7ccde8b2a6c6b7af26a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cc95afdb6fb803fba5a1804a8e50dae62f539fc41a184c162ababc3eacf122f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc95afdb6fb803fba5a1804a8e50dae62f539fc41a184c162ababc3eacf122f->enter($__internal_7cc95afdb6fb803fba5a1804a8e50dae62f539fc41a184c162ababc3eacf122f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cc95afdb6fb803fba5a1804a8e50dae62f539fc41a184c162ababc3eacf122f->leave($__internal_7cc95afdb6fb803fba5a1804a8e50dae62f539fc41a184c162ababc3eacf122f_prof);

        
        $__internal_7b954aca9787650ade4bd1449a8ebdfc4fbb40487c7ccde8b2a6c6b7af26a3d6->leave($__internal_7b954aca9787650ade4bd1449a8ebdfc4fbb40487c7ccde8b2a6c6b7af26a3d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4402139e92ada08cc11e31f14ce9d05a5dde8a5201aa84b094104feb08fe234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4402139e92ada08cc11e31f14ce9d05a5dde8a5201aa84b094104feb08fe234->enter($__internal_f4402139e92ada08cc11e31f14ce9d05a5dde8a5201aa84b094104feb08fe234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b531ddecc224c5c72828586eb126c747a36adae28d924f5859a66abffe92687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b531ddecc224c5c72828586eb126c747a36adae28d924f5859a66abffe92687->enter($__internal_9b531ddecc224c5c72828586eb126c747a36adae28d924f5859a66abffe92687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b531ddecc224c5c72828586eb126c747a36adae28d924f5859a66abffe92687->leave($__internal_9b531ddecc224c5c72828586eb126c747a36adae28d924f5859a66abffe92687_prof);

        
        $__internal_f4402139e92ada08cc11e31f14ce9d05a5dde8a5201aa84b094104feb08fe234->leave($__internal_f4402139e92ada08cc11e31f14ce9d05a5dde8a5201aa84b094104feb08fe234_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
