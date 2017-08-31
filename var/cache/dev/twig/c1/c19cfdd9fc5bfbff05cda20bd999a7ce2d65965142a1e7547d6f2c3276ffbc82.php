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
        $__internal_39bcc513c5e602f4be0725097c796c0d3b4d0e1b82f36475ddaefb5f8cec2ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bcc513c5e602f4be0725097c796c0d3b4d0e1b82f36475ddaefb5f8cec2ef3->enter($__internal_39bcc513c5e602f4be0725097c796c0d3b4d0e1b82f36475ddaefb5f8cec2ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $__internal_4f12890c5aa2c7628fb282d04319c31f4445b827f43132a5b3efd2fb27622b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f12890c5aa2c7628fb282d04319c31f4445b827f43132a5b3efd2fb27622b3d->enter($__internal_4f12890c5aa2c7628fb282d04319c31f4445b827f43132a5b3efd2fb27622b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39bcc513c5e602f4be0725097c796c0d3b4d0e1b82f36475ddaefb5f8cec2ef3->leave($__internal_39bcc513c5e602f4be0725097c796c0d3b4d0e1b82f36475ddaefb5f8cec2ef3_prof);

        
        $__internal_4f12890c5aa2c7628fb282d04319c31f4445b827f43132a5b3efd2fb27622b3d->leave($__internal_4f12890c5aa2c7628fb282d04319c31f4445b827f43132a5b3efd2fb27622b3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9823b9662d2f3a1afe518bcb7ff71e16e0148ad53d434d0ff48382d86dc2d073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9823b9662d2f3a1afe518bcb7ff71e16e0148ad53d434d0ff48382d86dc2d073->enter($__internal_9823b9662d2f3a1afe518bcb7ff71e16e0148ad53d434d0ff48382d86dc2d073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9eb8a1e73b9151e6b3630f0832f882da591cc0ca68dcae417d0928d5913546b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb8a1e73b9151e6b3630f0832f882da591cc0ca68dcae417d0928d5913546b9->enter($__internal_9eb8a1e73b9151e6b3630f0832f882da591cc0ca68dcae417d0928d5913546b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "MAUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9eb8a1e73b9151e6b3630f0832f882da591cc0ca68dcae417d0928d5913546b9->leave($__internal_9eb8a1e73b9151e6b3630f0832f882da591cc0ca68dcae417d0928d5913546b9_prof);

        
        $__internal_9823b9662d2f3a1afe518bcb7ff71e16e0148ad53d434d0ff48382d86dc2d073->leave($__internal_9823b9662d2f3a1afe518bcb7ff71e16e0148ad53d434d0ff48382d86dc2d073_prof);

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
