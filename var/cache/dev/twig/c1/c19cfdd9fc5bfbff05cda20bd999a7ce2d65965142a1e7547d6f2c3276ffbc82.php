<?php

/* MAUserBundle:Resetting:request.html.twig */
class __TwigTemplate_37ee299556defd635d199ad42b15bfb76b454a93a4119058f233f0828da2ae93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455b6acdc1388f6a8fb6126c26cd6f1d307081c3943a022581d63ee99e2d4ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455b6acdc1388f6a8fb6126c26cd6f1d307081c3943a022581d63ee99e2d4ace->enter($__internal_455b6acdc1388f6a8fb6126c26cd6f1d307081c3943a022581d63ee99e2d4ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $__internal_dfdc31b4521cfd09477f9be380fb7be2c7cd91d0d81380fb5f234135596bf28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdc31b4521cfd09477f9be380fb7be2c7cd91d0d81380fb5f234135596bf28e->enter($__internal_dfdc31b4521cfd09477f9be380fb7be2c7cd91d0d81380fb5f234135596bf28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455b6acdc1388f6a8fb6126c26cd6f1d307081c3943a022581d63ee99e2d4ace->leave($__internal_455b6acdc1388f6a8fb6126c26cd6f1d307081c3943a022581d63ee99e2d4ace_prof);

        
        $__internal_dfdc31b4521cfd09477f9be380fb7be2c7cd91d0d81380fb5f234135596bf28e->leave($__internal_dfdc31b4521cfd09477f9be380fb7be2c7cd91d0d81380fb5f234135596bf28e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8e847fa592bb6034bb02dd146782f71f35d56e215790d3642a423dc14edd21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e847fa592bb6034bb02dd146782f71f35d56e215790d3642a423dc14edd21b->enter($__internal_c8e847fa592bb6034bb02dd146782f71f35d56e215790d3642a423dc14edd21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf53a3462b3fbdc4802b50a3f1ea0750f5f8cb9aeaf6e60b4a7fd5c4b340fd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf53a3462b3fbdc4802b50a3f1ea0750f5f8cb9aeaf6e60b4a7fd5c4b340fd8e->enter($__internal_bf53a3462b3fbdc4802b50a3f1ea0750f5f8cb9aeaf6e60b4a7fd5c4b340fd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "MAUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bf53a3462b3fbdc4802b50a3f1ea0750f5f8cb9aeaf6e60b4a7fd5c4b340fd8e->leave($__internal_bf53a3462b3fbdc4802b50a3f1ea0750f5f8cb9aeaf6e60b4a7fd5c4b340fd8e_prof);

        
        $__internal_c8e847fa592bb6034bb02dd146782f71f35d56e215790d3642a423dc14edd21b->leave($__internal_c8e847fa592bb6034bb02dd146782f71f35d56e215790d3642a423dc14edd21b_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
