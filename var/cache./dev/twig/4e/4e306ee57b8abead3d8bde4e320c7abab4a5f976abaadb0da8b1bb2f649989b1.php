<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a25b46855827440367e0f0105bb14a61dc2861dfd26beeba5f9012f98740eea0 extends Twig_Template
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
        $__internal_23ace74d072dea3a30f8dd87b96db7cdb11b690cddcd8a5bbaf5014cb82a23fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ace74d072dea3a30f8dd87b96db7cdb11b690cddcd8a5bbaf5014cb82a23fe->enter($__internal_23ace74d072dea3a30f8dd87b96db7cdb11b690cddcd8a5bbaf5014cb82a23fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a14019c2017b6c3c3ca3ddd8a67129d8c212bc1bbf04287db183a7446be6487f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14019c2017b6c3c3ca3ddd8a67129d8c212bc1bbf04287db183a7446be6487f->enter($__internal_a14019c2017b6c3c3ca3ddd8a67129d8c212bc1bbf04287db183a7446be6487f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ace74d072dea3a30f8dd87b96db7cdb11b690cddcd8a5bbaf5014cb82a23fe->leave($__internal_23ace74d072dea3a30f8dd87b96db7cdb11b690cddcd8a5bbaf5014cb82a23fe_prof);

        
        $__internal_a14019c2017b6c3c3ca3ddd8a67129d8c212bc1bbf04287db183a7446be6487f->leave($__internal_a14019c2017b6c3c3ca3ddd8a67129d8c212bc1bbf04287db183a7446be6487f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78b364a57d41a207ce2f1398dcffd9fdef0416afcd192bb4d6ca766bb0aef1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b364a57d41a207ce2f1398dcffd9fdef0416afcd192bb4d6ca766bb0aef1c0->enter($__internal_78b364a57d41a207ce2f1398dcffd9fdef0416afcd192bb4d6ca766bb0aef1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae377dc1e409a25f0b68bebc667727421d1e8a31f3e71176d9d2bc1ec36e6d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae377dc1e409a25f0b68bebc667727421d1e8a31f3e71176d9d2bc1ec36e6d27->enter($__internal_ae377dc1e409a25f0b68bebc667727421d1e8a31f3e71176d9d2bc1ec36e6d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ae377dc1e409a25f0b68bebc667727421d1e8a31f3e71176d9d2bc1ec36e6d27->leave($__internal_ae377dc1e409a25f0b68bebc667727421d1e8a31f3e71176d9d2bc1ec36e6d27_prof);

        
        $__internal_78b364a57d41a207ce2f1398dcffd9fdef0416afcd192bb4d6ca766bb0aef1c0->leave($__internal_78b364a57d41a207ce2f1398dcffd9fdef0416afcd192bb4d6ca766bb0aef1c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49cf4259b9de978d21195a638093f0bee432bae1d30faf721c42811f07676367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cf4259b9de978d21195a638093f0bee432bae1d30faf721c42811f07676367->enter($__internal_49cf4259b9de978d21195a638093f0bee432bae1d30faf721c42811f07676367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b14fddec7a7e55a63531edbb83e0465a23554a9f3637b040312b468af2999f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14fddec7a7e55a63531edbb83e0465a23554a9f3637b040312b468af2999f2e->enter($__internal_b14fddec7a7e55a63531edbb83e0465a23554a9f3637b040312b468af2999f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b14fddec7a7e55a63531edbb83e0465a23554a9f3637b040312b468af2999f2e->leave($__internal_b14fddec7a7e55a63531edbb83e0465a23554a9f3637b040312b468af2999f2e_prof);

        
        $__internal_49cf4259b9de978d21195a638093f0bee432bae1d30faf721c42811f07676367->leave($__internal_49cf4259b9de978d21195a638093f0bee432bae1d30faf721c42811f07676367_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_265bd559bfdae713aeff66088b0184a6d294c2ee8d179aca70494b704532bf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265bd559bfdae713aeff66088b0184a6d294c2ee8d179aca70494b704532bf91->enter($__internal_265bd559bfdae713aeff66088b0184a6d294c2ee8d179aca70494b704532bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5d915bfdba2ea100b6eba0a3c1f4760ca19c9adad35edb1ffba97791a5a2813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d915bfdba2ea100b6eba0a3c1f4760ca19c9adad35edb1ffba97791a5a2813->enter($__internal_d5d915bfdba2ea100b6eba0a3c1f4760ca19c9adad35edb1ffba97791a5a2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d5d915bfdba2ea100b6eba0a3c1f4760ca19c9adad35edb1ffba97791a5a2813->leave($__internal_d5d915bfdba2ea100b6eba0a3c1f4760ca19c9adad35edb1ffba97791a5a2813_prof);

        
        $__internal_265bd559bfdae713aeff66088b0184a6d294c2ee8d179aca70494b704532bf91->leave($__internal_265bd559bfdae713aeff66088b0184a6d294c2ee8d179aca70494b704532bf91_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
